@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
               <a href="listarMateriaPrima">
                             <img src="css/iconos/atras.png">
               </a>

                <form action="listarMateriaPrima" method="get" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                             


                    <fieldset data-reactid=".0.0">

                      
                        
                        <legend data-reactid=".0.0.0">REGISTRAR LOTE MATERIA PRIMA</legend>


                          <div class="control" data-reactid=".0.0.3.0">

                          <input  id="idnombre" name="materia_prima" type="text" readOnly  required data-reactid=".0.0.2.0" class="active bloqueado" value='{{$nombreMateriaPrima}}'>

                            <label data-reactid=".0.0.3.1">* Materia Prima</label>
                        </div> 

                          <div class="control" data-reactid=".0.0.1">

                          <select name="proveedor" id="" data-reactid=".0.0.2.0" class="active">
                              @foreach($proveedores as $proveedor)

                               
                               <option value='{{$proveedor->NIT}}'>{{$proveedor->nombre}}</option>


                              @endforeach
                           </select>

                            
                            <label data-reactid=".0.0.1.1">* Proveedor </label>
                         </div>

                         <div class="control" data-reactid=".0.0.1">

                           <select name="responsable" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             
                               <option>--seleccione uno---</option>

                               @foreach($usuarios as $responsable)

                               
                               <option value='{{$responsable->correo}}'>{{$responsable->nombre}}--{{$responsable->rol}}--{{$responsable->correo}}</option>


                              @endforeach
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Responsable </label>
                         </div>

                         <div class="control" data-reactid=".0.0.1">

                             <input name="fecha"  type="date"  required="" placeholder= "Fecha"data-reactid=".0.0.3.0" class="active">
                            
                            <label data-reactid=".0.0.1.1">* Fecha </label>
                         </div>

                        <div class="control"  data-reactid=".0.0.3.0">
                             <input name="cantidad"  type="number"  required="" placeholder= "# Cantidad"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Cantidad </label>
                        </div>

                          <div class="control"  data-reactid=".0.0.3.0">
                             <input name="orden_de_compra"  type="text"  required="" placeholder= "Orden de compra"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Orden de compra </label>
                        </div>

                         <div class="control" data-reactid=".0.0.1">

                            <input name="fecha_de_vencimiento"  type="date" placeholder= "fecha"data-reactid=".0.0.3.0" class="active">
                            
                            <label data-reactid=".0.0.1.1">Fecha de vencimiento </label>
                         </div>
                         <div class="control"  data-reactid=".0.0.3.0">
                             <input name="numero_ficha_tecnica"  type="number" placeholder= "# ficha tecnica de materia prima"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">Numero ficha tecnica </label>
                        </div>
                        <div class="control"  data-reactid=".0.0.3.0">
                             <textarea  name="Observaciones" rows="5" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".o.0.3.1">Observaciones</label>
                        </div>

                         <div class="control" data-reactid=".0.0.1">
                           <input name="remision"  type="text"  required="" placeholder= "Remision"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.1.1">* Remision </label>
                          
                        </div>

                        
                        
                       
                          <div class="control" data-reactid=".0.0.1">
                           
                            <select name="programa"  data-reactid=".0.0.1.0" class="active">                             
                             
                               <option>--seleccione uno--</option>

                               @foreach($bodegas as $bodega)

                               
                               <option value='{{$bodega->codigo}}'>{{$bodega->codigo}}--{{$bodega->tipo}}</option>


                              @endforeach
                              
                              
                           </select>
                            
                     <label data-reactid=".0.0.1.1">* Bodega  </label>
                          </div>  


                          <div class="control"  data-reactid=".0.0.3.0">
                             <input name="total"  type="number"  required="" placeholder= "# Total"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Total</label>
                        </div>
                        <div class="control"  data-reactid=".0.0.3.0">
                             <input name="existencia"  type="number"  required="" placeholder= "# Existencia"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Existencia</label>
                        </div>                    
                       

                        <p>* campos obligatorios </p>
                        <br>  
                        
         <input class="inputRegistrarLote" type="submit" value="registrar lote materia prima" data-reactid=".0.0.6.2">


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

            $(document).ready(function () {

              
                $(".inputRegistrarLote").click(function (e) {

                    alert("ESTA FUNCIONALIDAD TODAVIA NO SE ENCUENTRA DISPONIBLE");


                });



            });

        </script>

@endsection
