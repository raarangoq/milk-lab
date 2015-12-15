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

       <input id ="idcodigo" placeholder="filtrar codigo" class="active" type="text" >
      </div>

      <div class="cell">
       Tipo
      </div>
      <div class="cell">
       <select id="idtipo" name="tipo" data-reactid=".0.0.´6.0" class="active" >
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
       <input id="idtemperatura_minima" placeholder="temperatura minima" class="active" type="number">
      </div>

      <div class="cell">
       En uso
      </div>
      <div class="cell">
         <select id="iden_uso" name="en_uso" data-reactid=".0.0.7.0" class="active"> 
                                 
            <option>-seleccionar uso-</option>
            <option value=1>SI</option>
            <option value=0>NO</option>                      

          </select>
      </div>

      </div>

    <div class="row">
        <div class="cell">
      Temperatura maxima
        </div>
      <div class="cell">
       <input id="idtemperatura_maxima" placeholder="temperatura maxima" class="active" type="text">
      </div>


      <div class="cell">

       <input id ="" value="filtrar" class="inputFiltrar" type="submit">
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
        En uso
      </div>
      <div class="cell">
        Editar
      </div>
      <div class="cell">
        Control de cava
      </div>
      <div class="cell" align="center">
        Flujo de cava
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

      <div class="cell">
          <input class="inputVerFlujo" type="submit" id={{$cava->id}} value="ver" data-reactid=".0.0.7" >
            
         <input class="inputRegistrarFlujo" type="submit" id={{$cava->id}} value="registrar" data-reactid=".7">
      </div>

    </div>


@endforeach
<br>
<nav>
  {!!$cavas->render()!!}
</nav>
  
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
$(".inputVerFlujo").click(function(e){
 var id = e.target.id;
//alert(id);

document.location.href = "registrarFlujoCava?id=" + id;

});


$(".inputFiltrar").click(function(e){

var id=$("#idcodigo").val();
var en_uso=$("#iden_uso").val();
var tipo=$("#idtipo").val();
//var temperatura_minima=$("#idtemperatura_minima").val();
//var temperatura_maxima=$("#idtemperatura_maxina").val();

document.location.href = "filtrarCava?en_uso=" + en_uso +"&tipo="+tipo +"&id=" +id;

});


});

</script>

@endsection
