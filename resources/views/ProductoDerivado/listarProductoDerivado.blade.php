@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<center>  LISTAR PRODUCTO DERIVADO </center>

<div class="wrapper">
  
    <div class="table">

      <div class="row header blue">
        <div class="cell">
          Filtra búsqueda
        </div>

      </div>

      <div class="row">

        <div class="cell">
       Nombre
        </div>
      <div class="cell">

       <input placeholder="filtrar nombre" class="active" type="text" name="id">
      </div>

      <div class="cell">
       Temperatura de almacenamiento 
        </div>
      <div class="cell">
       <select name="tipo" data-reactid=".0.0.´6.0" class="active">
                              <option>--seleccionar tipo--</option>
                              <option>Ambiente</option>
                              <option>Refrigeración</option>
                              <option>Congelación</option>
      </select>
      </div>

      </div>


      <div class="row">

          <div class="cell">
       Tipo :
        </div>
      <div class="cell">
       <select id="" name="tipo" data-reactid=".0.0.7.0" class="active"> 
                               
          <option>-seleccionar tipo-</option>
          <option>Bebida</option>
          <option>Dulce</option>
          <option>Helado</option>
          <option>Queso</option>  
        </select>
      </div>
        
          <div class="cell">
       Unidad de medida :
        </div>
      <div class="cell">
       <select id="" name="unidad_de_medida" data-reactid=".0.0.7.0" class="active"> 
                               
          <option>-seleccionar unidad-</option>
          <option>Litro</option>
          <option>Kilo</option> 
        </select>
      </div>

    

      </div>

      <div class="row">
          <div class="cell">
       Tipo de tamaño :
        </div>
      <div class="cell">
       <select id="" name="tipo_de_tamano" data-reactid=".0.0.7.0" class="active"> 
                               
          <option>-seleccionar tipo-</option>
          <option>Bolsa</option>
          <option>Pote</option>
          <option>Vaso</option>
          <option>Cuarto</option> 
          <option>Caja</option>
          <option>Bloque</option>
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
        Tipo
      </div>
      <div class="cell">

        Descripción física
      </div>
      <div class="cell">
        Tiempo de vencimiento
      </div>
      <div class="cell">
        Instrucciones en la etiqueta 

      </div>
      <div class="cell">
        Temperatura de almacenamiento
      </div>
      <div class="cell">
        Control de cava
      </div>
      <div class="cell">
        Unidad de medida 
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

        <input class="inputEditar" type="submit" id={{$cava->id}} value="editar cava" data-reactid=".0.0.7" >
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
