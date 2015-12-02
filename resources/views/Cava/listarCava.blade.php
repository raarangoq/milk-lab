@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<div class="wrapper">
  
    <div class="table">

      <div class="row header blue">
        <div class="cell">
        FILTRAR CAVA
        </div>

      </div>

      <div class="row">

        <div class="cell">
       Codigo
        </div>
      <div class="cell">

       <input placeholder="filtrar codigo" class="active" type="text" name="id">
      </div>

      <div class="cell">
       Tipo
        </div>
      <div class="cell">
       <select name="tipo" data-reactid=".0.0.´6.0" class="active">
                              <option>--seleccionar tipo--</option>
                              <option>Congelamiento</option>
                              <option>Maduración</option>
                              <option>Producto terminado</option>
                            </select>

      </div>

      </div>


      <div class="row">
        <div class="cell">
       Temperatura minima
        </div>
      <div class="cell">
       <input placeholder="temperatura minima" class="active" type="text" name="temperatura_minima">
      </div>

      <div class="cell">
       En uso
        </div>
      <div class="cell">
       <select id="" name="en_uso" data-reactid=".0.0.7.0" class="active"> 
                               
          <option>-seleccionar uso-</option>
          <option>SI</option>
          <option>NO</option>                      


        </select>
      </div>



      </div>

      <div class="row">
        <div class="cell">
      Temperatura maxima
        </div>
      <div class="cell">
       <input placeholder="temperatura maxima" class="active" type="text" name="temperatura_maxima">
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

        Temperatura minima
      </div>
      <div class="cell">
        Temperatura maxima
      </div>
      <div class="cell">
        En uso?

      </div>
      <div class="cell">
        Editar
      </div>
      <div class="cell">
        Control de cava
      </div>
    </div>

   
@foreach($cavas as $cava)


<div class="row">
      <div class="cell" align="center">
        {{$cava->id}}
      </div>

      <div class="cell">
        {{$cava->tipo}}
      </div>

      <div class="cell">
        {{$cava->temperatura_minima}}
      </div>

      <div class="cell">
        {{$cava->temperatura_maxima}}

      </div>

@if ($cava->en_uso === 1)
      <div class="cell" align="center">
       SI
@else
      <div class="cell red" align="center">    
       NO

@endif
 
      </div>
      
      <div class="cell">

<input class="inputEditar" type="submit" id={{$cava->id}} value="editar cava" data-reactid=".0.7" >
      </div>
      <div class="cell">
        <input class="inputVer" type="submit" id={{$cava->id}} value="ver" data-reactid=".0.0.7" >
      </div>

    </div>
@endforeach

             </div>


        <input class="inputRegistrar" type="submit" value="registrar cava" data-reactid=".0.0.5">

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

document.location.href = "editarCava?id=" + id;



});


$(".inputVer").click(function(e){
 var id = e.target.id;
//alert(id);
document.location.href = "listarControlCava?id=" + id;



});


$(".inputRegistrar").click(function(e){
 var id = e.target.id;
//alert(id);
document.location.href = "registrarCava";


});

});

</script>

@endsection
