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
        Nombre
      </div>
      <div class="cell">
        Tipo
      </div>
      <div class="cell">
        Unidad de medida
      </div>
      <div class="cell">
        Editar
      </div>
      <div class="cell">
        Registrar Lote
      </div>
      
    </div>



   
@foreach($materiasPrimas as $materiaPrima)


<div class="row">
      <div class="cell" align="center">
        {{$materiaPrima->nombre}}
      </div>
      <div class="cell">
        {{$materiaPrima->tipo}}
      </div>
      <div class="cell">
        {{$materiaPrima->unidad_de_medida}}
      </div>
     
      <div class="cell">
        <input class="inputEditar" type="submit" id={{$materiaPrima->nombre}} value="editar" data-reactid=".0.0.7" >
      </div>
      <div class="cell">
        <input class="inputRegistrarLote" type="submit" id={{$materiaPrima->nombre}} value="registrar" data-reactid=".0.0.7" >
      </div>
    </div>



@endforeach
<br>
 <nav>
 {!!$materiasPrimas->render()!!}
</nav>

             </div>
           <input class="inputRegistrar" type="submit" value="registrar materia prima" data-reactid=".0.0.5">
             </div>




<!-- FIN Contenido -->

@endsection





@section('ajaxEditar')


<script>

$(document).ready(function(){

$(".inputEditar").click(function(e){
 var id = e.target.id;

var nombre=id;
document.location.href = "editarMateriaPrima?nombre=" + nombre;


});


$(".inputRegistrarLote").click(function(e){



});


$(".inputRegistrar").click(function(e){
 var id = e.target.id;
//alert(id);
document.location.href = "registrarMateriaPrima";


});

});

</script>

@endsection
