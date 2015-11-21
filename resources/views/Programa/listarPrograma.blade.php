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
        Numero de programa
      </div>
      <div class="cell">
        Nombre
      </div>
      <div class="cell">
        Tipo
      </div>
      <div class="cell">
       Responsable
      </div>
      <div class="cell">
        En ejecucion?
      </div>
      <div class="cell">
        Editar
      </div>
      <div class="cell">
        Observaciones
      </div>
    </div>



   
@foreach($programas as $programa)


<div class="row">
      <div class="cell" align="center">
        {{$programa->numero_de_programa}}
      </div>
      <div class="cell">
        {{$programa->nombre}}
      </div>
      <div class="cell">
        {{$programa->tipo}}
      </div>
      <div class="cell">
        {{$programa->usuario_responsable}}
      </div>



@if ($programa->en_ejecucion === 1)
      <div class="cell" align="center">
       SI
@else
      <div class="cell red" align="center">    
       NO
@endif
 
      </div>
      <div class="cell">
        <input class="inputEditar" type="submit" id={{$programa->numero_de_programa}} value="editar" data-reactid=".0.0.7" >
      </div>
      <div class="cell" align="center">
        {{$programa->observaciones}}
      </div>
    </div>



@endforeach



             </div>
           <input class="inputRegistrar" type="submit" value="registrar programa" data-reactid=".0.0.5">
             </div>




<!-- FIN Contenido -->

@endsection





@section('ajaxEditar')


<script>

$(document).ready(function(){

$(".inputEditar").click(function(e){
 var id = e.target.id;

 var numero_de_programa=id;
//alert(id);
document.location.href = "editarPrograma?numero_de_programa=" + numero_de_programa;


});



$(".inputRegistrar").click(function(e){
 var id = e.target.id;
//alert(id);
document.location.href = "registrarPrograma";


});

});

</script>

@endsection
