@extends('layout.principal')
@include('alerts.request')

@section('contenido')

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
                            <select id="idusuario_realizador" name="usuario_realizador" data-reactid=".0.0.6.0" class="active" > 
                     <option></option>          
 @foreach($usuarios as $usuario)
<option value={{$usuario->correo}}>{{$usuario->nombre}}--{{$usuario->rol}}--{{$usuario->correo}}</option>
@endforeach   

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






