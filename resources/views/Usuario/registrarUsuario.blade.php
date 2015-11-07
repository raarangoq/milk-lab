@extends('layout.principal')

<style>
    
    @import url(css/4.MENSAJES/style.css);
</style>

@section('contenido')
<!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->

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

                <form action="registrarUsuario" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 

                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR USUARIO</legend>

                        <div class="control" data-reactid=".0.0.1">
                            <input name="nombre" type="text" id="nombre" placeholder="nombre:" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Nombre de Usuario</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">


                            <input name="cedula" type="number" id="cedula" placeholder="ceudla:" required="" data-reactid=".0.0.2.0" class="active">

                            <label data-reactid=".0.0.2.1">* Cedula</label>
                        </div>

                        <div class="control" data-reactid=".0.0.3">
                            <input name="correo" type="email" id="name" placeholder="em@il / correo de usuario@unal.edu.co" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Correo de Usuario</label>
                        </div>

                        <div class="control" data-reactid=".0.0.4">
                            <input name="password" type="password" id="password" placeholder="contraseña de usuario" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Contraseña</label>
                        </div>
                        <div class="control" data-reactid=".0.0.5">
                            <input name="password2" type="password" id="password2" placeholder="contraseña de usuario" required="" data-reactid=".0.0.5.0" class="active">
                            <label data-reactid=".0.0.5.1">* Repetir Contraseña</label>
                        </div>

                        <div class="control" data-reactid=".0.0.6">
                            <select name="rol" data-reactid=".0.0.´6.0" class="active">
                              <option>Director</option>
                              <option>Estudiante</option>
                              <option>Microbiólogo</option>
                              <option>Operario</option>
                              <option>Profesor</option>
                              <option>Técnico operativo</option>
                            </select>
                            <label data-reactid=".0.0.6.1">* Tipo de Rol</label>
                        </div>                      

                        <input type="submit" value="registrar usuario" data-reactid=".0.0.7">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endSection