@extends('layout.principal')

<style>
    
    @import url(css/4.MENSAJES/style.css);
</style>


@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarCava" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR CAVA</legend>

                        <div class="control" data-reactid=".0.0.2">

                            <select name="tipo" data-reactid=".0.0.2.0" class="active">
                              <option>Congelamiento</option>
                              <option>Maduración</option>
                              <option>Producto terminado</option>

                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Tipo de Cava</label>
                        </div>
                        <div class="control" data-reactid=".0.0.3">
                            <input name="temperatura_minima"  type="number" step="0.001" placeholder="temperatura minima" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Temperatura minima</label>
                        </div>
                        <div class="control" data-reactid=".0.0.4">

                            <input name="temperatura_maxima"     type="number" step="0.001" placeholder="temperatura maxima" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Temperatura maxima</label>

                        </div>
                    

                        <input type="submit" value="registrar cava" data-reactid=".0.0.5">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endSection






