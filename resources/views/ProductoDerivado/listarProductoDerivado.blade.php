@extends('layout.principal')

@section('contenido')

@include('alerts.request')


<div class="wrapper">
  
    <div class="table">

      <div class="row header blue">
        <div class="cell">
          
          FILTRAR PRODUCTO DERIVADO
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

       <input value="filtrar busqueda" class="active" type="submit">
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
        Unidad de medida 
      </div>
    </div>

   

<br>
<input class="inputEditar" type="submit" value="editar " data-reactid=".0.0.5">
<br>
     <input class="inputRegistrar" type="submit" value="registrar producto derivado " data-reactid=".0.0.5">
     <br>
     <input class="inputRegistrarLote" type="submit" value="registrar lote producto derivado " data-reactid=".0.0.5">


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

document.location.href = "editarProductoDerivado?id=" + id;



});

$(".inputRegistrar").click(function(e){
 var id = e.target.id;
//alert(id);

document.location.href = "registrarProductoDerivado?id=" + id;

});



});

</script>

@endsection
