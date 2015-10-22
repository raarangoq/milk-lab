@extends('layout.principal')

@section('contenido')
<!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<main>
    <article>
        <section>
            <div id="stage" class="stage">


                <form action="editarPerfil" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 


                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR PERFIL</legend>

                        

                        <div class="control" data-reactid=".0.0.2">


                            <input   id="idcorreoAnterior" name="correoAnterior" type="text"  required="" data-reactid=".0.0.2.0" class="active bloqueado" value={{$usuario['correo']}} readOnly>

                            <label data-reactid=".0.0.2.1">Correo Actual</label>
                        </div>
                        <div class="control" data-reactid=".0.0.2">


                            <input  id="idcorreo" name="correo" type="email" placeholder="nuevo-correo@unal.edu.co" required="" data-reactid=".0.0.2.0" class="active">

                            <label data-reactid=".0.0.2.1">Correo Nuevo</label>
                        </div>


                        <div class="control" data-reactid=".0.0.2">


                            <input  id="idcedulaAnterior" name="cedulaAnterior" type="number" required="" data-reactid=".0.0.2.0" class="active bloqueado" value={{$usuario['cedula']}} readOnly>

                            <label data-reactid=".0.0.2.1">Cedula Actual</label>
                        </div>
                        <div class="control" data-reactid=".0.0.2">


                            <input  id="idcedula" name="cedula" type="number" placeholder="ceudla:" required="" data-reactid=".0.0.2.0" class="active">

                            <label data-reactid=".0.0.2.1">Cedula Nueva</label>
                        </div>

                        <div class="control" data-reactid=".0.0.3">


                            <input id="idcnombreAnterior"  name="nombreAnterior" type="text" required="" data-reactid=".0.0.3.0" class="active bloqueado" value={{$usuario['nombre']}} readOnly>

                            <label data-reactid=".0.0.3.1">Nombre Actual</label>

                        </div>
                        <div class="control" data-reactid=".0.0.3">


                            <input id="idnombre" name="nombre" type="text" id="name" placeholder="nombre:" required="" data-reactid=".0.0.3.0" class="active">

                            <label data-reactid=".0.0.3.1">Nombre Nuevo</label>

                        </div>
                        <div class="control" data-reactid=".0.0.3">


                            <input id="idpasswordAnterior" readOnly name="passwordAnterior" type="text"  required="" data-reactid=".0.0.3.0" class="active bloqueado">

                            <label data-reactid=".0.0.3.1">Password Actual</label>

                        </div>
                        <div class="control" data-reactid=".0.0.3">


                            <input id="idpassword"  name="password" type="password" placeholder="nuevo password" required="" data-reactid=".0.0.3.0" class="active">

                            <label data-reactid=".0.0.3.1">Password Nuevo</label>

                        </div>
                       <div class="control" data-reactid=".0.0.3">


                            <input id="idpassword2"  name="password2" type="password" placeholder="confirmar nuevo password" required="" data-reactid=".0.0.3.0" class="active">

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



@section('ajaxEditar')


<script>

$(document).ready(function(){

    $('#idCorreoBuscar').on('change',function(e){
   
    var correo = $('#idCorreoBuscar').val();

        $.get('/ajax?correo=' + correo,function(data){  


          $('#idcorreo').val(data[0]['correo']);
          $('#idnombre').val(data[0]['nombre']);
          $('#idcedula').val(data[0]['cedula']);
          $('#idrol').val(data[0]['rol']);


          if((data[0]['habilitado'])==1){
          $('#idhabilitado').val('Habilitado');
          }else{
          $('#idhabilitado').val('Inhabilitado');
          }

          


         });

     });
            
});

</script>

@endsection
