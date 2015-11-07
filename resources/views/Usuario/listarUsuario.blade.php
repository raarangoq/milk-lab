@extends('layout.principal')

@section('contenido')


@if(Session::has('success'))
    
<div class="alert alert-success mensajeVerde">
    
{{Session::get("success")}}
</div>


@elseif(Session::has('error'))
    
<div class="alert alert-success mensajeRojo">
    
{{Session::get("error")}}
</div>

@endif

<style>
    @import url(css/3.TABLAS/css/style.css);
    @import url(css/4.MENSAJES/style.css);
</style>
           

<div class="wrapper">
  
    <div class="table">

      <div class="row header blue">
        <div class="cell">
        FILTRAR USURIO
        </div>

      </div>

      <div class="row">

        <div class="cell">
       Nombre
        </div>
      <div class="cell">
       <input placeholder="filtrar nombre" class="active" type="text">
      </div>

      <div class="cell">
       Rol
        </div>
      <div class="cell">
       <select name="rol" data-reactid=".0.0.´6.0" class="active">
                              <option>--seleccionar rol--</option>
                              <option>Director</option>
                              <option>Estudiante</option>
                              <option>Microbiólogo</option>
                              <option>Operario</option>
                              <option>Profesor</option>
                              <option>Técnico operativo</option>
                            </select>
      </div>

      </div>

      <div class="row">
        <div class="cell">
       Correo
        </div>
      <div class="cell">
       <input placeholder="filtrar correo" class="active" type="text">
      </div>

      <div class="cell">
       Estado
        </div>
      <div class="cell">
       <select id="idhabilitado" name="habilitado" data-reactid=".0.0.7.0" class="active"> 
                               
          <option>-seleccionar estado-</option>
          <option>Habilitado</option>
          <option>Inhabilitado</option>                      

        </select>
      </div>


      </div>

      <div class="row">
        <div class="cell">
       Cedula
        </div>
      <div class="cell">
       <input placeholder="filtrar cedula" class="active" type="text">
      </div>


      <div class="cell">
       <input value="filtrar" class="active" type="submit">
      </div>
      <div class="cell">
       
      </div>

      </div>



  </div>

 </div>
             



             <div class="wrapper">
  
             <div class="table">

             <div class="row header blue">
      <div class="cell">
        Nombre
      </div>
      <div class="cell">
        Correo
      </div>
      <div class="cell">
        Cedula
      </div>
      <div class="cell">
        Rol
      </div>
      <div class="cell">
        Estado
      </div>
      <div class="cell">
        Editar
      </div>
    </div>



   
@foreach($usuarios as $user)


<div class="row">
      <div class="cell">
        {{$user->nombre}}
      </div>
      <div class="cell">
        {{$user->correo}}
      </div>
      <div class="cell">
        {{$user->cedula}}
      </div>
      <div class="cell">
        {{$user->rol}}
      </div>



@if ($user->habilitado == 1)
      <div class="cell">
       Habilitado
@else
      <div class="cell red">    
       Inhabilitado
@endif
 
      </div>
      <div class="cell">
        <input class="inputEditar" type="submit" id={{$user->correo}} value="editar usuario" data-reactid=".0.0.7" >
      </div>
    </div>

@endforeach



</div>
             </div>




<!-- FIN Contenido -->

@endsection



@section('ajaxEditar')


<script>

$(document).ready(function(){

$(".inputEditar").click(function(e){
 var id = e.target.id;
//alert(id);
document.location.href = "editarUsuario?correo=" + id;


});

});

</script>

@endsection
