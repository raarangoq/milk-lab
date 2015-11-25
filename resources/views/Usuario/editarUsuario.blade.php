@extends('layout.principal')

@section('contenido')
<!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->

@include('alerts.request')

<main>

    <article>
        <section>
            <div id="stage" class="stage">

            <a href="listarUsuario">
              <img src="css/iconos/atras.png">
            </a>


                <form action="editarUsuario" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 


                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR USUARIO</legend>

                       

                           <div class="control" data-reactid=".0.0.2">


                            <input  id="idnombre" name="nombre" type="text" readOnly  required data-reactid=".0.0.2.0" class="active bloqueado" value={{$usuario->nombre}}>

                            <label data-reactid=".0.0.2.1">Nombre</label>
                        </div>
                        <div class="control" data-reactid=".0.0.2">


                            <input  id="idcedula" name="cedula" type="number"  required readOnly data-reactid=".0.0.2.0" class="active bloqueado" value={{$usuario->cedula}}>

                            <label data-reactid=".0.0.2.1">Cedula</label>
                        </div>

                        <div class="control" data-reactid=".0.0.3">


                            <input id="idcorreo" readOnly name="correo" type="email" required readOnly data-reactid=".0.0.3.0" class="active bloqueado"  value={{$usuario->correo}}>


                            <label data-reactid=".0.0.3.1">Correo de Usuario</label>


                        </div>
                       
                        <div class="control" data-reactid=".0.0.6">
                            <select id="idrol" name="rol" data-reactid=".0.0.6.0" class="active"  value={{$usuario->rol}}> 
                               
                              <option>{{$usuario->rol}}</option>

                              <option>Director</option>
                              <option>Estudiante</option>
                              <option>Microbiólogo</option>
                              <option>Operario</option>
                              <option>Profesor</option>
                              <option>Técnico operativo</option>      

                            </select>
                            <label data-reactid=".0.0.6.1">Tipo de Rol</label>
                        </div>  

                        <div class="control" data-reactid=".0.0.7">
                            <select id="idhabilitado" name="habilitado" data-reactid=".0.0.7.0" class="active"> 
                               
@if ($usuario->habilitado === 1)
   <option value="1">Habilitado</option>
   <option value="0">Inhabilitado</option>
@else
    <option value="0">Inhabilitado</option>
     <option value="1">Habilitado</option> 
@endif                  

                            </select>
                            <label data-reactid=".0.0.7.1">Estado</label>
                        </div>  

                                          

                        <input type="submit" value="editar usuario" data-reactid=".0.0.7">

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