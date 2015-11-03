@extends('layout.principal')

@section('contenido')
<!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->

   @if(Session::has('success'))
                           <div class="alert alert-success text= center">
                                   {{Session::get("success")}}
                            </div>
    @endif      
<main>
    <article>
        <section>
            <div id="stage" class="stage">


                <form action="editarPerfil" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 


                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR PERFIL</legend>

                        

                       
                        <div class="control" data-reactid=".0.0.2">


                            <input  id="idcorreo" name="correo" type="email" placeholder="nuevo-correo@unal.edu.co" required="" data-reactid=".0.0.2.0" class="active" value={{$usuario['correo']}}>

                            <label data-reactid=".0.0.2.1">* Correo</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">


                            <input  id="idcedula" name="cedula" type="number" placeholder="ceudla:" required="" data-reactid=".0.0.2.0" class="active" value={{$usuario['cedula']}}>

                            <label data-reactid=".0.0.2.1">* Cedula</label>
                        </div>

                        <div class="control" data-reactid=".0.0.3">


                            <input id="idnombre" name="nombre" type="text" id="name" placeholder="nombre:" required="" data-reactid=".0.0.3.0" class="active" value={{$usuario['nombre']}}>

                            <label data-reactid=".0.0.3.1">* Nombre</label>

                        </div>


                        <div class="control" data-reactid=".0.0.3">


                            <h4>Si quiere cambiar su contraseña ingresar los siquientes datos: </h4>

                        </div>



                        <div class="control" data-reactid=".0.0.3">


                            <input id="idpasswordAnterior"  name="passwordAnterior" type="password" data-reactid=".0.0.3.0" placeholder="actual password" class="active ">

                            <label data-reactid=".0.0.3.1">Password Actual</label>

                        </div>
                        <div class="control" data-reactid=".0.0.3">


                            <input id="idpassword"  name="password" type="password" placeholder="nuevo password"  data-reactid=".0.0.3.0" class="active">

                            <label data-reactid=".0.0.3.1">Password Nuevo</label>

                        </div>
                       <div class="control" data-reactid=".0.0.3">


                            <input id="idpassword2"  name="password2" type="password" placeholder="confirmar nuevo password"  data-reactid=".0.0.3.0" class="active">

                            <label data-reactid=".0.0.3.1">Confirmar Password</label>

                        </div>    
                     
                    
                        <input type="submit" value="editar perfil" data-reactid=".0.0.7">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endsection




