@extends('layout.principal')

<style>
    
    @import url(css/4.MENSAJES/style.css);
</style>

@section('contenido')

@if(Session::has('success'))
    
<div class="alert alert-success mensajeVerde">
{{Session::get("success")}}
</div>

@elseif(Session::has('error'))
    
<div class="alert alert-error mensajeRojo">    
{{Session::get("error")}}
</div>

@endif


<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarControlCava" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR CONTROL DE CAVA</legend>

                        <div class="control" data-reactid=".0.0.2">
                         <input value={{$id_cava}} name="cava"  type="number" required="" data-reactid=".0.0.3.0" class="active bloqueado" readonly>
                            <label data-reactid=".0.0.2.1">Cava</label>
                        </div>
                        <div class="control" data-reactid=".0.0.3">
                            <input name="fecha"  type="date" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Fecha</label>
                        </div>
                        <div class="control" data-reactid=".0.0.4">
                            <input name="humedad" type="number" step="0.001" placeholder="humedad" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Humedad</label>
                        </div>
                         <div class="control" data-reactid=".0.0.4">
                            <input name="temperatura" type="number" step="0.001" placeholder="temperatura" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Temperatura</label>
                        </div>
                         <div class="control" data-reactid=".0.0.4">
                            <select name="usuario_realizador" class="active" >
                                <option>--seleccionar usuario--</option>


                            </select>
                            <label data-reactid=".0.0.4.1">* Usuario Registrador</label>
                        </div>
                    

                        <input type="submit" value="registrar control cava" data-reactid=".0.0.5">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endSection






