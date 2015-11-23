@extends('layout.principal')

@section('contenido')

      <!--   
<input type="hidden" name="nombreAnterior" value={{$productoDerivado->nombre}}>
         <div class="wrapper">
          
            <div class="table">

              <div class="row header blue">
                
                <div class="cell">
               EDITAR PRODUCTO DERIVADO
                 </div>

                   </div>   

                    <div class="row">

                      <div class="control" data-reactid=".0.0.3.0">
                            <input name="nombre"  type="text" id="name" placeholder="nombre" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Nombre </label>
                       </div>  
                    </div>

                     <div class="row">                    

                         <div class="control" data-reactid=".0.0.1">

                            <select name"tipo" data-reactid=".0.0.1.0" class="active">
                             
                               <option>Bebida</option>
                              <option>Dulce</option>
                              <option>Helado </option>
                              <option>Queso </option>
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Tipo </label>
                         </div>

                      </div>
                       
                    <div class="row">
                        <div class="control" data-reactid=".0.0.1">
                           <textarea  name="descripcion_fisica" rows="10" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1">Descripcion fisica </label>
                        </div>
                    </div>
                     <div class="row">
                         <div class="control" data-reactid=".0.0.3.0">
                            <input name="tiempo_de_vencimiento"  type="number" id="name" placeholder="Descripcion fisica" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Tiempo de vencimiento </label>
                       </div>
                    </div>

                    <div class="row">
                         <div class="control" data-reactid=".0.0.3.0">
                            <textarea name="instrucciones_de_la_etiqueta" rows="10"  data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">Instrucciones de la etiqueta </label>
                        </div>
                     </div> 

                     <div class="row"> 

                         <div class="control" data-reactid=".0.0.1">

                            <select name"temperatura_de_almacenamiento" data-reactid=".0.0.1.0" class="active">
                             
                               <option>Ambiente</option>
                              <option>Refrigeración</option>
                              <option>Congelación </option>
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">*  Temperatura de almacenamiento  </label>
                          </div>
                    </div>
                    <div class="row">
                           <div class="control" data-reactid=".0.0.1">

                            <select name"unidad_de_medida" data-reactid=".0.0.1.0" class="active">
                             
                               <option>Litro</option>
                              <option>Kilo</option>
                           
                           </select>
                            
                            <label data-reactid=".0.0.1.1">*  Unidad de medidad  </label>
                        </div>
                   </div>
                      
                                        
             </div>

          </div>



             <div class="wrapper">
  
             <div class="table">

            <div class="row header blue">
                
                <div class="cell">
               TAMAÑOS
                 </div>

            </div> 

            <div class="row header blue">

              <div class="cell">
                * Cantidad 
              </div>
              <div class="cell">
                * Tipo
              </div>
              <div class="cell">
                * Precio
              </div> 
              <div class="cell">
               
              </div>    
              
            </div>

      @foreach($productos_derivados as $producto_derivado)

            <div class="row">

                <div class="cell">
                  <input type="number" name="cantidad">
                </div>

                  <div class="cell">
                        <div class="cell">
                           <select id="" name="tipo" data-reactid=".0.0.7.0" class="active"> 
                                                   
                              <option>-seleccionar un tipo-</option>
                              <option>Bolsa</option>
                              <option>Pote</option> 
                              <option> Vaso</option> 
                              <option>Cuarto</option>
                              <option>Caja</option> 
                              <option>Bloque</option>               

                            </select>
                         </div>
                  </div>

                <div class="cell">
                  <input type="number" name="precio">
                </div>

                 <div class="cell">
                  <input class="inputquitar" type="submit" value="quitar" data-reactid=".7">
                </div>
                

            </div>

            
                <input class="inputagregarfila" type="submit" value="agregar fila " data-reactid=".7">
               
             
                <input class="inputregistrarproductoderivado" type="submit" value="registrar producto derivado " data-reactid=".7">
             </div>

             </div> 
  

  




<!-- FIN Contenido -->

@endSection
-->



@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="editarProductoDerivado" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <input type="hidden" name="nombreAnterior" value={{$productoDerivado->nombre}}>
                    <fieldset data-reactid=".0.0">
                        
                        <legend data-reactid=".0.0.0">EDITAR PRODUCTO DERIVADO</legend>

                          <div class="control" data-reactid=".0.0.3.0">
                            <input name="nombre"  type="text" id="name" placeholder="nombre" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Nombre </label>
                        </div> 
                          <div class="control" data-reactid=".0.0.1">

                            <select name"tipo" data-reactid=".0.0.1.0" class="active">
                             
                               <option>Bebida</option>
                              <option>Dulce</option>
                              <option>Helado </option>
                              <option>Queso </option>
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Tipo </label>
                         </div>
                         <div class="control" data-reactid=".0.0.1">
                           <textarea  name="descripcion_fisica" rows="10" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1">Descripcion fisica </label>
                        </div>
                         <div class="control" data-reactid=".0.0.3.0">
                            <input name="tiempo_de_vencimiento"  type="number" id="name" placeholder="Descripcion fisica" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Tiempo de vencimiento </label>
                       </div>
                        <div class="control" data-reactid=".0.0.3.0">
                            <textarea name="instrucciones_de_la_etiqueta" rows="10"  data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">Instrucciones de la etiqueta </label>
                        </div>
                          <div class="control" data-reactid=".0.0.1">

                            <select name"temperatura_de_almacenamiento" data-reactid=".0.0.1.0" class="active">
                             
                               <option>Ambiente</option>
                              <option>Refrigeración</option>
                              <option>Congelación </option>
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">*  Temperatura de almacenamiento  </label>
                          </div>
                         <div class="control" data-reactid=".0.0.1">

                            <select name"unidad_de_medida" data-reactid=".0.0.1.0" class="active">
                             
                               <option>Litro</option>
                              <option>Kilo</option>
                           
                           </select>
                            
                            <label data-reactid=".0.0.1.1">*  Unidad de medidad  </label>
                        </div>

                        

                        





                        <input type="submit" value="editar producto derivado" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection










