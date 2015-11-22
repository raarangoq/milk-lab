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
       <input placeholder="filtrar codigo" class="active" type="text" name="codigo">
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
        Codigo
      </div>
      <div class="cell">
        Tipo
      </div>
      <div class="cell">
        En uso
      </div>   
      
       <div class="cell">
        Flujo de bodega
      </div>
      <div class="cell">
        Editar
      </div>
    </div>
  

@foreach($bodegas as $bodega)


<div class="row">
      <div class="cell" align="center">
        {{$bodega->codigo}}
      </div>
      <div class="cell">
        {{$bodega->tipo}}
      </div>
      

@if ($bodega->en_uso === 1)
      <div class="cell" align="center">
       SI
@else
      <div class="cell red" align="center">    
       NO

@endif
 
      </div>
       <div class="cell">
      <input class="inputVer" type="submit" id={{$bodega->codigo}} value="ver" data-reactid=".0.0.7" >
        
<input class="inputRegistrar" type="submit" id={{$bodega->codigo}} value="registrar" data-reactid=".7">
         
      </div>

      <div class="cell">
<input class="inputEditar" type="submit" id={{$bodega->codigo}} value="editar" data-reactid=".0.0.7" >
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

document.location.href = "editarBodega?id=" + id;

});

});

</script>

@endsection


