@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
               <a href="listarLoteProductoDerivado">
              <img src="css/iconos/atras.png">
              </a>
                <form action="editarLoteProductoDerivado" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
             
                    <fieldset data-reactid=".0.0">
                        
                        <legend data-reactid=".0.0.0">EDITAR LOTE DE PRODUCTO DERIVADO</legend>             
                        


                        <div class="control" data-reactid=".0.0.1">

                            <select name="producto_derivado" data-reactid=".0.0.1.0" class="active">
                              
                               <option>--seleccionar producto--      </option>
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Producto derivado </label>
                         </div>

                         <div class="control" data-reactid=".0.0.1">

                            <select name="tamano" data-reactid=".0.0.1.0" class="active">
                              
                               <option>--seleccionar tamaño--      </option>
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Tamaño </label>
                         </div>

                      <div class="control" data-reactid=".0.0.3.0">
                            <br><input name="numero_de_lote"  type="number" id="name" placeholder="numero de lote" srequired="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Numero de lote</label>
                       </div>

                        <div class="control" data-reactid=".0.0.1">

                            <select name="tamano" data-reactid=".0.0.1.0" class="active">
                              
                               <option>--seleccionar responsable--      </option>
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Responsable</label>
                         </div>

                         <div class="control" data-reactid=".0.0.1">

                            <select name="cava" data-reactid=".0.0.1.0" class="active">
                              
                               <option>--seleccionar cava--      </option>
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Cava</label>
                         </div>

                      <div class="control" data-reactid=".0.0.3.0">
                            <br><input name="numero_de_lote"  type="date" id="fecha" placeholder="numero de lote" srequired="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Fecha</label>
                       </div>

                          <div class="control" data-reactid=".0.0.3.0">
                            <br><input name="cantidad"  type="number" id="fecha" placeholder="numero de lote" srequired="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Cantidad</label>
                       </div>

                      <div class="control" data-reactid=".0.0.3.0">
                            <br><input name="total"  type="number" id="fecha" placeholder="numero de lote" srequired="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Total</label>
                       </div>

                         <div class="control" data-reactid=".0.0.3.0">
                            <br><input name="existencia"  type="number" id="fecha" placeholder="numero de lote" srequired="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Existencia</label>
                       </div>

                         <div class="control" data-reactid=".0.0.1">
                           <textarea  name="observaciones" rows="5"  data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1"> Observaciones </label>
                        </div>              
                   
                         <div class="control" data-reactid=".0.0.1">

                           <select name="programa" data-reactid=".0.0.1.0" class="active">
                             
                               <option>--seleccione programa--</option>
                              
                           
                           </select>
                            
                      <label data-reactid=".0.0.1.1">*  Programa  </label>
                        </div>   

                        <p>* campos obligatorios</p>

                   <input type="submit" value="editar lote de producto derivado" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection










