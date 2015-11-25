@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarProductoDerivado" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        
                        <legend data-reactid=".0.0.0">REGISTRAR PRODUCTO DERIVADO</legend>
                       

                          <div class="control" data-reactid=".0.0.1">

                            <select name="tipo" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             
                               <option>Bebida</option>
                              <option>Dulce</option>
                              <option>Helado </option>
                              <option>Queso </option>
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Producto Derivado </label>
                         </div>

                          <div class="control" data-reactid=".0.0.1">

                            <select name="tipo" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             
                               <option>Bebida</option>
                              <option>Dulce</option>
                              <option>Helado </option>
                              <option>Queso </option>
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Tamaño</label>
                         </div>

                           <div class="control"  data-reactid=".0.0.3.0">
                             <br></br><input name="tiempo_de_vencimiento"  type="date"  required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">*Fecha </label>
                            
                       </div>

                       <div class="control"  data-reactid=".0.0.3.0">
                             <input name="tiempo_de_vencimiento"  type="number"  required="" placeholder= " tiempo de vencimiento (dias)"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">*Entra </label>
                            
                       </div>

                       <div class="control"  data-reactid=".0.0.3.0">
                             <input name="tiempo_de_vencimiento"  type="number"  required="" placeholder= " tiempo de vencimiento (dias)"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">*Sale </label>
                            
                       </div>

                        <div class="control" data-reactid=".0.0.1">

                          <select name="tipo" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             
                               <option>Bebida</option>
                              <option>Dulce</option>
                              <option>Helado </option>
                              <option>Queso </option>
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Motivo de salida </label>
                         </div>

                           <div class="control"  data-reactid=".0.0.3.0">
                             <input name="tiempo_de_vencimiento"  type="number"  required="" placeholder= " tiempo de vencimiento (dias)"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">*Total </label>
                            
                         </div>

                           <div class="control"  data-reactid=".0.0.3.0">
                             <input name="tiempo_de_vencimiento"  type="number"  required="" placeholder= " tiempo de vencimiento (dias)"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">*Existencia </label>
                            
                         </div>

                          <div class="control" data-reactid=".0.0.1">

                          <select name="tipo" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             
                               <option>Bebida</option>
                              <option>Dulce</option>
                              <option>Helado </option>
                              <option>Queso </option>
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Programa </label>
                         </div>

                           <div class="control" data-reactid=".0.0.1">

                          <select name="tipo" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             
                               <option>Bebida</option>
                              <option>Dulce</option>
                              <option>Helado </option>
                              <option>Queso </option>
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Responsable </label>
                         </div>               

                         <div class="control" data-reactid=".0.0.1">
                           <textarea  name="descripcion_fisica" rows="5" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1">Observaciones </label>
                          
                        </div>                     
   
                         <div class="control" data-reactid=".0.0.1">

                         <select name="unidad_de_medida"  data-reactid=".0.0.2.0" class="active">
                             
                               <option>Litro</option>
                              <option>Kilo</option>
                           
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Cava </label>
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


