@extends('layout.principal')

@section('contenido')



<style>
    @import url(css/3.TABLAS/css/style.css);
    @import url(css/4.MENSAJES/style.css);
</style>

<main>
    <article>
        <section>
            <div id="stage" class="stage">
               <a href="listarProductoDerivado">
                             <img src="css/iconos/atras.png">
                           </a>

                <form action="#" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                   
                           


                    <fieldset data-reactid=".0.0">

                      
                        
                        <legend data-reactid=".0.0.0">REGISTRAR PRODUCTO DERIVADO</legend>


                          <div class="control" data-reactid=".0.0.3.0">
                            <input name="nombre"  type="text"  placeholder="nombre" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Nombre </label>
                        </div> 

                          <div class="control" data-reactid=".0.0.1">

                            <select name="tipo" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             
                               <option>Bebida</option>
                              <option>Dulce</option>
                              <option>Helado </option>
                              <option>Queso </option>
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Tipo </label>
                         </div>

                         <div class="control" data-reactid=".0.0.1">
                           <textarea  name="descripcion_fisica" rows="5" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1">Descripcion fisica </label>
                          
                        </div>

                         <div class="control"  data-reactid=".0.0.3.0">
                             <br><input name="tiempo_de_vencimiento"  type="number"  required="" placeholder= " tiempo de vencimiento (dias)"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">*Tiempo de vencimiento (dias) </label>
                            
                       </div>
                        
                        <div class="control" data-reactid=".0.0.3.0">
                             <br><textarea name="instrucciones_de_la_etiqueta" rows="5"  data-reactid=".0.0.3.0" class="active"></textarea> 
                            <label data-reactid=".0.0.3.1"> Instrucciones de la etiqueta </label>  
                        </div>
                          <div class="control" data-reactid=".0.0.1">
                           <br>
                            <select name="temperatura_de_almacenamiento"  data-reactid=".0.0.1.0" class="active">                             
                             
                               <option>Ambiente</option>
                              <option>Refrigeración</option>
                              <option>Congelación </option>
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Temperatura de almacenamiento  </label>
                          </div>
                       
                         <div class="control" data-reactid=".0.0.1">

                          <select name="unidad_de_medida"  data-reactid=".0.0.2.0" class="active">
                             
                               <option>Litro</option>
                              <option>Kilo</option>
                           
                           </select>
                            
                            <label data-reactid=".0.0.1.1">*  Unidad de medidad  </label>
                        </div> 

                        <p>* campos obligatorios </p>
                        <br>  
                        




                            
                       
    <div class="wrapper" style="padding-left: 0px;">

  
             <div class="table">

              <div class="row header green">
                  <center>TAMAÑO</center> 
              </div>
  
             <div class="row header green">
              
             
      <div class="cell">
        *Cantidad
      </div>
      <div class="cell">
        *Tipo
      </div>
      <div class="cell">
        *Precio
      </div>
      
     <div>
       
     </div>
     
      </div>


      <div class="row" id="idrow0">

        <div class="cell">
           <input type="number" name="cantidad0">
        </div>

        <div class="cell">
           <select name="tipo0">
               <option></option>
               <option>Bolsa</option>
               <option>Pote</option>
               <option>Vaso</option>
               <option>Cuarto</option>
               <option>Caja</option>
               <option>Bloque</option>
              
           </select>
        </div>

        <div class="cell">
           <input type="number" name="precio0">
        </div>

        <div class="cell">
           
           <input class="inputQuitarFila" id='idrow0' type="submit" value="quitar" data-reactid=".0.0.5">
        </div>


      </div>



     </div>
     <input class="inputAgregarFila" type="submit" value="agregar fila" data-reactid=".0.0.5">
     
  <br><br>
   </div>


                    <input class="inputRegistrarProducto" type="submit" value="registrar producto derivado" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection


@section('ajaxEditar')


<script>


$(document).ready(function(){

  var fila=0;



  $(".inputAgregarFila").click(function(e){
 
fila++;

var nuevaFila="<div class='row' id='idrow"+fila+"' >";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='number' name='cantidad"+fila+"'>";
nuevaFila+="</div>";


nuevaFila+="<div class='cell' align='center'>";
nuevaFila+="<select name='tipo"+fila+"' data-reactid='.0.0.6.0' class='active'>";
nuevaFila+="<option></option>";
nuevaFila+="<option>Bolsa</option>";
nuevaFila+="<option>Pote</option>";
nuevaFila+="<option>Vaso</option>";
nuevaFila+="<option>Cuarto</option>";
nuevaFila+="<option>Caja</option>";
nuevaFila+="<option>Bloque</option>";  
nuevaFila+="</select>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='number' name='precio"+fila+"'>";
nuevaFila+="</div>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input class='inputQuitarFila' id='"+fila+"' type='submit' value='quitar' data-reactid='.0.0.6.2'>";
//nuevaFila+="<input class='borrar' id='ida' type='submit' value='quitar'  onclick='quitar()'  onChange='myFunction()' data-reactid='.0.0.6.2'>";

//nuevaFila+="<input class='inputQuitarFila' name='loco' type='submit' value='quitar' data-reactid='.0.0.5'>";


nuevaFila+="</div>";

nuevaFila+="</div>";

$(".table").append(nuevaFila);




$(".inputQuitarFila").off('click');


    $(".inputQuitarFila").on('click', function() {


     //alert('El valor es: ' + $(this).data('val'));

     var idfila=$(this).attr("id");
     //alert(idfila);

     // $("#idrow1").remove();

     $("#idrow"+idfila).remove();
     fila--;



    });


});





$(".inputRegistrarProducto").click(function(e){


var vectorAtt = [];
Atts = {};

var nombre=($("input[name=nombre]").val());
var tipo=($("select[name=tipo]").val());
var descripcion_fisica=($("textarea[name=descripcion_fisica]").val());

var tiempo_de_vencimiento=($("input[name=tiempo_de_vencimiento]").val());
var instrucciones_de_la_etiqueta=($("textarea[name=instrucciones_de_la_etiqueta]").val());
var temperatura_de_almacenamiento=($("select[name=temperatura_de_almacenamiento]").val());
var unidad_de_medida=($("select[name=unidad_de_medida]").val());



          Atts["nombre"] = nombre; 
          Atts["tipo"] = tipo; 
          Atts["descripcion_fisica"] = descripcion_fisica;
          Atts["tiempo_de_vencimiento"] = tiempo_de_vencimiento; 
          Atts["instrucciones_de_la_etiqueta"] = instrucciones_de_la_etiqueta; 
          Atts["temperatura_de_almacenamiento"] = temperatura_de_almacenamiento;
          Atts["unidad_de_medida"] = unidad_de_medida; 

          vectorAtt.push(Atts);
   


aInfoAtributos   = JSON.stringify(vectorAtt);
//alert(aInfoAtributos);


var vectorDeTamanio = [];
item = {};

for (var i=0; i<fila+1; i++) {


var tipo=($("select[name=tipo"+i+"]").val());
var cantidad=($("input[name=cantidad"+i+"]").val());
var precio=($("input[name=precio"+i+"]").val());

item = {};

if(tipo !==''
  && cantidad !=='' 
  && precio !==''
  ){
          item["tipo"] = tipo; 
          item["cantidad"] = cantidad; 
          item["precio"] = precio;

          vectorDeTamanio.push(item);
    }


}



aInfoTamanio   = JSON.stringify(vectorDeTamanio); 


var cadenaFormulario = "&atributosProducto=" + aInfoAtributos + "&tamanio=" + aInfoTamanio;
 
$.ajax({
    data: cadenaFormulario,
    dataType: "html",
    type: 'GET',
    url : 'registrarProductoDerivadoAJAX',
    processData: false, 
    contentType: false,
    success: function(r){

          // alert(r);

          alert("SE REGISTRO EL PRODUCTO EXITOSAMENTE")


    }
  });



});




});


</script>

@endSection


