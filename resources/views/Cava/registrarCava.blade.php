@extends('layout.principal')

@section('contenido')



<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarCava" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR CAVA</legend>

                         <div class="control" data-reactid=".0.0.1">
                           
                             <input name="nombre" type="text" id="name" placeholder="tipo de cava" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Nombre de Cava</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">

                            <select name"tipo" data-reactid=".0.0.2.0" class="active">
                              <option>Congelamiento</option>
                              <option>Maduración</option>
                              <option>Producto terminado</option>

                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Tipo de Cava</label>
                        </div>
                        <div class="control" data-reactid=".0.0.3">
                            <input name="temperatura_minima"     type="number" id="name" placeholder="temperatura minima" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Temperatura min °C</label>
                        </div>
                        <div class="control" data-reactid=".0.0.4">
                            <input name="temperatura_maxima"     type="number" id="name" placeholder="temperatura maxima" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Temperatura max °C</label>
                        </div>

                          <div class="control" data-reactid=".0.0.1">

                            <select name"tipo" data-reactid=".0.0.1.0" class="active">
                             
                             <option> Si</option>
                              <option>No </option>
                              

                            </select>
                            
                            <label data-reactid=".0.0.1.1">* En uso</label>
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






