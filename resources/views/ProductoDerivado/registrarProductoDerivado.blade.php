@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
               <a href="listarProductoDerivado">
                             <img src="css/iconos/atras.png">
                           </a>

                <form action="registrarProductoDerivado" method="post" data-reactid=".0">
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
                        

    <div class="wrapper">
  
             <div class="table">

              <div class="row header blue">
                  <center>TAMAÑO</center> 
              </div>
  
             <div class="row header blue">
              
             
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


      <div class="row">

        <div class="cell">
           <input type="number" name="cantidad">
        </div>

        <div class="cell">
           <select name="tipo">
               <option>Bolsa</option>
               <option>Pote</option>
               <option>Vaso</option>
               <option>Cuarto</option>
               <option>Caja</option>
               <option>Bloque</option>
              
           </select>
        </div>

        <div class="cell">
           <input type="number" name="precio">
        </div>

        <div class="cell">
           <input type="submit" value="editar" data-reactid=".0.0.6.2">
        </div>


      </div>



     </div>
     <input class="inputAgregarFila" type="submit" value="agregar fila" data-reactid=".0.0.5">
  <br></br>
   </div>


                    <input type="submit" value="registrar producto derivado" data-reactid=".0.0.6.2">


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

  var fila=2;

  $(".inputAgregarFila").click(function(e){
 
fila++;

var nuevaFila="<div class='row'>";

nuevaFila+="<div class='cell'>";
nuevaFila+="<input type='number' name='cantidad"+fila+"'>";
nuevaFila+="</div>";


nuevaFila+="<div class='cell' align='center'>";
nuevaFila+="<select name='tipo"+fila+"' data-reactid='.0.0.6.0' class='active'>";
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



nuevaFila+="</div>";



$(".table").append(nuevaFila);

//alert(nuevaFila);

});




}
</script>

@endSection


