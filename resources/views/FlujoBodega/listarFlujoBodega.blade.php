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
        Fecha
      </div>
      <div class="cell">
        Entra
      </div>
      <div class="cell">
        Sale
      </div>
      <div class="cell">
        Motivo de salida
      </div>
      <div class="cell">
        Total
      </div>
      <div class="cell">
        Existencia
      </div>
      <div class="cell">
         Observaciones
      </div>
      <div class="cell">
        Programa
      </div>
      <div class="cell">
        Responsable
      </div>
      <div class="cell">
        Editar
      </div>
      <div class="cell">
        Borrar
      </div>
    </div>


@foreach($flujos_de_bodega as $flujo)


<div class="row">
      <div class="cell" align="center">
        {{$flujo->materia_prima}}
      </div>
      <div class="cell">
        {{$flujo->fecha}}
      </div>
      <div class="cell">
        {{$flujo->entra}}
      </div>
      <div class="cell">
        {{$flujo->sale}}
      </div>
      <div class="cell">
        {{$flujo->motivo_de_salida}}
      </div>
      <div class="cell">
        {{$flujo->total}}
      </div>
       <div class="cell">
        {{$flujo->existencia}}
      </div>
      <div class="cell">
        {{$flujo->observaciones}}
      </div>
      <div class="cell">
        {{$flujo->programa}}
      </div>
      <div class="cell">
        {{$flujo->usuario_responsable}}
      </div>

      <div class="cell">
        <input class="inputEditar" type="submit" value="editar" data-reactid=".0.0.7" >
      </div>
      <div class="cell">
        <input class="inputVer" type="submit" value="borrar" data-reactid=".0.0.7" >
      </div>
    </div>



@endforeach




             </div>
             
             </div>




<!-- FIN Contenido -->

@endsection





@section('ajaxEditar')






@endsection
