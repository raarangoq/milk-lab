@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<style>
    @import url(css/3.TABLAS/css/style.css);
    @import url(css/4.MENSAJES/style.css);
</style>
           

             <div class="wrapper">
  
             <div class="table">

             <div class="row header blue">
      <div class="cell">
        *Materia prima
      </div>
      <div class="cell">
        *Fecha
      </div>
      <div class="cell">
        *Entra
      </div>
      <div class="cell">
        *Sale
      </div>
      <div class="cell">
        *Motivo de salida
      </div>
      <div class="cell">
        *Total
      </div>
      <div class="cell">
        *Existencia
      </div>
      <div class="cell">
         Observaciones
      </div>
      <div class="cell">
        *Programa
      </div>
      <div class="cell">
        *Responsable
      </div>
    </div>




<div class="row">

      <div class="cell" align="center">
        <select name="materia_prima">
          <option>-seleccionar materiaPrima-</option>
        </select>
      </div>
      <div class="cell">
        <input type="date" name="fecha">
      </div>
      <div class="cell">
        <input type="number" name="entra">
      </div>
      <div class="cell">
        <input type="number" name="sale">
      </div>
      <div class="cell" align="center">
        <select name="motivo">
          <option>-seleccionar motivo-</option>
        </select>
      </div>
       <div class="cell">
        <input type="number" name="total">
      </div>
      <div class="cell">
        <input type="number" name="existencia">
      </div>
     <div class="cell">
        <input type="text" name="observaciones" class="active">
      </div>
      <div class="cell" align="center">
        <select name="programa">
          <option>-seleccionar programa-</option>
        </select>
      </div>
      <div class="cell" align="center">
        <select name="responsable">
          <option>-seleccionar responsable-</option>
        </select>
      </div>


</div>
   

<br/>
           <input class="inputAgregarFila" type="submit" value="agregar fila" data-reactid=".0.0.5">

             </div>

             <br/><br/>
           <input class="inputRegistrar" type="submit" value="registrar flujos de bodega" data-reactid=".0.0.5">
             </div>




<!-- FIN Contenido -->

@endsection





@section('ajaxEditar')


<script>

$(document).ready(function(){


$(".inputAgregarFila").click(function(e){
 
//alert("add fila");
var nuevaFila="<div class='row'></div>";

//alert(nuevaFila);
$(".table").appendTo(nuevaFila);




});


$(".inputRegistrar").click(function(e){
 var id = e.target.id;
//alert(id);
document.location.href = "registrarCava";


});

});

</script>

@endsection
