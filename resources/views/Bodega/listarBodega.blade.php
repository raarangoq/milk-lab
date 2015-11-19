@extends('layout.principal')

@section('contenido')


@include('alerts.request')

<!-- <style>
    @import url(css/3.TABLAS/css/style.css);
    @import url(css/4.MENSAJES/style.css);
</style> -->           

<div class="wrapper">
  
    <div class="table">

      <div class="row header blue">
        <div class="cell">
        FILTRAR BODEGA
        </div>

      </div>

      <div class="row">

        <div class="cell">
       Codigo
        </div>
      <div class="cell">
       <input placeholder="filtrar codigo" class="active" type="text">
      </div>

      <div class="cell">
       En uso
        </div>
      <div class="cell">
       <select name="rol" data-reactid=".0.0.´6.0" class="active">
                              <option>--seleccionar --</option>
                              <option>Si</option>
                              <option>No</option>
                            
          </select>
      </div>

      </div>

   

      <div class="row">
        
        <div class="cell">
       Tipo
        </div>
      <div class="cell">
       <select name="rol" data-reactid=".0.0.´6.0" class="active">
                              <option>--seleccionar --</option>
                              <option>Reactivo</option>
                              <option>Materia prima</option>
                            
          </select>
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
