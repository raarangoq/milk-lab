@extends('layout.principal')

@section('contenido')
<!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<main>
    <article>
        <section>
            <div id="stage" class="stage">


                <form action="editarUsuario" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 


                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR USUARIO</legend>

                        <div class="control" data-reactid=".0.0.1">



<select id="idCorreoBuscar" data-reactid=".0.0.1.0" class="active buscar"> 



@foreach($usuarios as $user)

<option value={{$user->correo}} > {{$user->nombre}} -- {{$user->rol}} -- {{$user->correo}}</option>

@endforeach


</select>  

                           


                            <label data-reactid=".0.0.1.1">BUSCAR usuario</label>
                        </div><br/>

                           <div class="control" data-reactid=".0.0.2">


                            <input  id="idnombre" name="nombre" type="text" id="cedula" placeholder="nombre:" required="" data-reactid=".0.0.2.0" class="active">

                            <label data-reactid=".0.0.2.1">Nombre</label>
                        </div>
                        <div class="control" data-reactid=".0.0.2">


                            <input  id="idcedula" name="cedula" type="number"  required="" readOnly data-reactid=".0.0.2.0" class="active bloqueado">

                            <label data-reactid=".0.0.2.1">Cedula</label>
                        </div>

                        <div class="control" data-reactid=".0.0.3">


                            <input id="idcorreo" readOnly name="correo" type="email" id="name"  required="" data-reactid=".0.0.3.0" class="active bloqueado">


                            <label data-reactid=".0.0.3.1">Correo de Usuario</label>


                        </div>
                       
                        <div class="control" data-reactid=".0.0.6">
                            <select id="idrol" name="rol" data-reactid=".0.0.6.0" class="active"> 
                               

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
                               

                              <option>Habilitado</option>
                              <option>Inhabilitado</option>                      

                            </select>
                            <label data-reactid=".0.0.7.1">Estado</label>
                        </div>  

                                          

                        <input type="submit" value="editar usuario" data-reactid=".0.0.7">

                        @if(Session::has('success'))
                           <div class="alert alert-success">
                                   {{Session::get("success")}}
                            </div>
                        @endif
                        
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
