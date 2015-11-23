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
        <select id="idmateria_prima" name="materia_prima0" data-reactid=".0.0.6.0" class="active" > 
                   <option></option>            
 @foreach($materiasPrimas as $materiasPrima)
<option value={{$materiasPrima->nombre}}>{{$materiasPrima->nombre}} -- {{$materiasPrima->unidad_de_medida}}</option>
@endforeach   

        </select>
      </div>

      <div class="cell">
        <input type="date" name="fecha0">
      </div>

      <div class="cell">
        <input type="number" name="entra0">
      </div>
      
      <div class="cell">
        <input type="number" name="sale0">
      </div>
      <div class="cell" align="center">
        <select name="motivo_de_salida0">
        <option></option>
          <option>Producción</option>
          <option>Descarte</option>
        </select>
      </div>
       <div class="cell">
        <input type="number" name="total0">
      </div>
      <div class="cell">
        <input type="number" name="existencia0">
      </div>
     <div class="cell">
        <input type="text" name="observaciones0" class="active">
      </div>
      <div class="cell" align="center">
        <select id="idprograma" name="programa0" data-reactid=".0.0.6.0" class="active" > 
                <option></option>               
 @foreach($programas as $programa)
<option value={{$programa->numero_de_programa}}>{{$programa->nombre}}</option>
@endforeach   

        </select>
      </div>
      <div class="cell" align="center">
        <select id="idusuario_responsable" name="usuario_responsable0" data-reactid=".0.0.6.0" class="active" > 
                       <option></option>        
 @foreach($usuarios as $usuario)
<option value={{$usuario->correo}}>{{$usuario->nombre}}--{{$usuario->rol}}--{{$usuario->correo}}</option>
@endforeach   

        </select>
      </div>


</div>





<div class="row">

      <div class="cell" align="center">
        <select id="idmateria_prima" name="materia_prima1" data-reactid=".0.0.6.0" class="active" > 
                   <option></option>            
 @foreach($materiasPrimas as $materiasPrima)
<option value={{$materiasPrima->nombre}}>{{$materiasPrima->nombre}} -- {{$materiasPrima->unidad_de_medida}}</option>
@endforeach   

        </select>
      </div>
      <div class="cell">
        <input type="date" name="fecha1">
      </div>
      <div class="cell">
        <input type="number" name="entra1">
      </div>
      <div class="cell">
        <input type="number" name="sale1">
      </div>
      <div class="cell" align="center">
        <select name="motivo_de_salida1">
        <option></option>
          <option>Producción</option>
          <option>Descarte</option>
        </select>
      </div>
       <div class="cell">
        <input type="number" name="total1">
      </div>
      <div class="cell">
        <input type="number" name="existencia1">
      </div>
     <div class="cell">
        <input type="text" name="observaciones1" class="active">
      </div>
      <div class="cell" align="center">
        <select id="idprograma" name="programa1" data-reactid=".0.0.6.0" class="active" > 
                        <option></option>       
 @foreach($programas as $programa)
<option value={{$programa->numero_de_programa}}>{{$programa->nombre}}</option>
@endforeach   

        </select>
      </div>
      <div class="cell" align="center">
        <select id="idusuario_responsable" name="usuario_responsable1" data-reactid=".0.0.6.0" class="active" > 
                     <option></option>          
 @foreach($usuarios as $usuario)
<option value={{$usuario->correo}}>{{$usuario->nombre}}--{{$usuario->rol}}--{{$usuario->correo}}</option>
@endforeach   

        </select>
      </div>


</div>
   





<div class="row">

      <div class="cell" align="center">
        <select id="idmateria_prima" name="materia_prima2" data-reactid=".0.0.6.0" class="active" > <option></option>
                               
 @foreach($materiasPrimas as $materiasPrima)
<option value={{$materiasPrima->nombre}}>{{$materiasPrima->nombre}} -- {{$materiasPrima->unidad_de_medida}}</option>
@endforeach   

        </select>
      </div>
      <div class="cell">
        <input type="date" name="fecha2">
      </div>
      <div class="cell">
        <input type="number" name="entra2">
      </div>
      <div class="cell">
        <input type="number" name="sale2">
      </div>
      <div class="cell" align="center">
        <select name="motivo_de_salida2">
        <option></option>
          <option>Producción</option>
          <option>Descarte</option>
        </select>
      </div>
       <div class="cell">
        <input type="number" name="total2">
      </div>
      <div class="cell">
        <input type="number" name="existencia2">
      </div>
     <div class="cell">
        <input type="text" name="observaciones2" class="active">
      </div>
      <div class="cell" align="center">
        <select id="idprograma" name="programa2" data-reactid=".0.0.6.0" class="active" > 
                    <option></option>           
 @foreach($programas as $programa)
<option value={{$programa->numero_de_programa}}>{{$programa->nombre}}</option>
@endforeach   

        </select>
      </div>
      <div class="cell" align="center">
        <select id="idusuario_responsable" name="usuario_responsable2" data-reactid=".0.0.6.0" class="active" > 
                     <option></option>          
 @foreach($usuarios as $usuario)
<option value={{$usuario->correo}}>{{$usuario->nombre}}--{{$usuario->rol}}--{{$usuario->correo}}</option>
@endforeach   

        </select>
      </div>


</div>
   




             </div>
             <input class="inputAgregarFila" type="submit" value="agregar fila" data-reactid=".0.0.5">

             <br/><br/>
           <input class="inputRegistrar" type="submit" value="registrar flujos de bodega" data-reactid=".0.0.5">
             </div>




<!-- FIN Contenido -->

@endsection





@section('ajaxEditar')


<script>

$(document).ready(function(){

  var fila=2;


$(".inputAgregarFila").click(function(e){
 
fila++;

var nuevaFila="<div class='row'>";

nuevaFila+="<div class='cell' align='center'>";
nuevaFila+="<select name='materia_prima"+fila+"' data-reactid='.0.0.6.0' class='active'>";
nuevaFila+="@foreach($materiasPrimas as $materiasPrima)";
nuevaFila+="<option value={{$materiasPrima->nombre}}>{{$materiasPrima->nombre}} -- {{$materiasPrima->unidad_de_medida}}</option>";
nuevaFila+="@endforeach";
nuevaFila+="</select>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='date' name='fecha"+fila+"'>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='number' name='entra"+fila+"'>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='number' name='sale"+fila+"'>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell' align='center'>";
nuevaFila+="<select name='motivo_de_salida"+fila+"' data-reactid='.0.0.6.0' class='active'>";
nuevaFila+="<option>Producción</option>";
nuevaFila+="<option>Descarte</option>";
nuevaFila+="</select>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='number' name='total"+fila+"'>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='number' name='existencia"+fila+"'>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='number' name='observaciones"+fila+"'>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell' align='center'>";
nuevaFila+="<select name='programa"+fila+"' data-reactid='.0.0.6.0' class='active'>";
nuevaFila+="@foreach($programas as $programa)";
nuevaFila+="<option value={{$programa->numero_de_programa}}>{{$programa->nombre}}</option>";
nuevaFila+="@endforeach";
nuevaFila+="</select>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell' align='center'>";
nuevaFila+="<select name='usuario_responsable"+fila+"' data-reactid='.0.0.6.0' class='active'>";
nuevaFila+="@foreach($usuarios as $usuario)";
nuevaFila+="<option value={{$usuario->correo}}>{{$usuario->nombre}}--{{$usuario->rol}}--{{$usuario->correo}}</option>";
nuevaFila+="@endforeach";
nuevaFila+="</select>";
nuevaFila+="</div>";

nuevaFila+="</div>";



$(".table").append(nuevaFila);

//alert(nuevaFila);

});


$(".inputRegistrar").click(function(e){
//1.ver cuantos filas envian (cuales estan llenas completamente)
//2.crear vector de objetos de filas
//3.enviar vector hacia controlador postRegistrarFlujoBodega

var vectorDeFlujo = [];


for (var i=0; i<fila+1; i++) {


var materia=($("select[name=materia_prima"+i+"]").val());
var fecha=($("input[name=fecha"+i+"]").val());
var entra=($("input[name=entra"+i+"]").val());
var sale=($("input[name=sale"+i+"]").val());
var motivo_de_salida=($("select[name=motivo_de_salida"+i+"]").val());
var total=($("input[name=total"+i+"]").val());
var existencia=($("input[name=existencia"+i+"]").val());
var observaciones=($("input[name=observaciones"+i+"]").val());
var programa=($("select[name=programa"+i+"]").val());
var responsable=($("select[name=usuario_responsable"+i+"]").val());


alert(motivo_de_salida);
item = {};

if(materia !==''
  && fecha !=='' 
  && entra !==''
  && sale !==''
  && motivo_de_salida !==''
  && total !==''
  && existencia !==''
  && programa !==''
  && responsable !==''
  ){
          item["materia"] = materia; 
          item["fecha"] = fecha; 
          item["entra"] = entra;
          item["sale"] = sale;  
          item["motivo_de_salida"] = motivo_de_salida;  
          item["total"] = total;
          item["existencia"] = existencia; 
          item["observaciones"] = observaciones;
          item["programa"] = programa; 
          item["responsable"] = responsable;
          vectorDeFlujo.push(item);

         // vectorDeFlujo.push($("select[name=materia_prima"+i+"]").val());
    }


}
console.log(vectorDeFlujo);


aInfo   = JSON.stringify(vectorDeFlujo); 
alert(aInfo);
var identificacion = aInfo ;
var cadenaFormulario = "&data=" + identificacion;
 
$.ajax({
    data: cadenaFormulario,
    dataType: "html",
    type: 'GET',
    url : 'registrarFlujoBodega2',
    processData: false, 
    contentType: false,
    success: function(r){

 
//return r;

      //Una vez que se haya ejecutado de forma exitosa hacer el código para que muestre esto mismo.

      //     alert(r);


    }
  });

//vectorDeFlujo.push("hue");

//document.location.href = "registrarFlujoBodega2?vector=" + vectorDeFlujo;


});

});

</script>

@endsection
