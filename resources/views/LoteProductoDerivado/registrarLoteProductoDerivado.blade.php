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

                <form action="listarProductoDerivado" method="get" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                             


                    <fieldset data-reactid=".0.0">

                      
                        
                        <legend data-reactid=".0.0.0">REGISTRAR LOTE PRODUCTO DERIVADO</legend>


                          <div class="control" data-reactid=".0.0.3.0">
                            <input name="nombre"  type="text"  placeholder="numero de lote" required="" data-reactid=".0.0.3.0" class="active" value=''>
                            <label data-reactid=".0.0.3.1">* Numero de lote </label>
                        </div> 

                          <div class="control" data-reactid=".0.0.1">

                          <input  id="idnombre" name="nombre" type="text" readOnly  required data-reactid=".0.0.2.0" class="active bloqueado" value='{{$nombreProducto}}'>

                            
                            <label data-reactid=".0.0.1.1">* Producto derivado </label>
                         </div>

                         <div class="control" data-reactid=".0.0.1">

                            <select name="tamano" id="idtipo" data-reactid=".0.0.2.0" class="active">
                              @foreach($tamanos as $tamano)

                               
                               <option value='{{$tamano->id}}'>{{$tamano->tipo}}--{{$tamano->cantidad}}</option>


                              @endforeach
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Tamaño </label>
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

                        <div class="control"  data-reactid=".0.0.3.0">
                             <input name="cantidad"  type="number"  required="" placeholder= " cantidad"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Cantidad </label>
                        </div>

                          <div class="control"  data-reactid=".0.0.3.0">
                             <input name="fecha"  type="date"  required="" placeholder= " cantidad"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Fecha </label>
                        </div>

                         <div class="control" data-reactid=".0.0.1">

                            <select name="responsable" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             
                               <option>--seleccione uno---</option>

                               @foreach($cavas as $cava)

                               
                               <option value='{{$cava->id}}'>{{$cava->id}}--{{$cava->tipo}}</option>


                              @endforeach
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">* Cava </label>
                         </div>
                         <div class="control"  data-reactid=".0.0.3.0">
                             <input name="total"  type="number"  required="" placeholder= " cantidad"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Total </label>
                        </div>
                        <div class="control"  data-reactid=".0.0.3.0">
                             <input name="existencia"  type="number"  required="" placeholder= " cantidad"data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Existencia </label>
                        </div>

                         <div class="control" data-reactid=".0.0.1">
                           <textarea  name="descripcion_fisica" rows="5" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1"> Observaciones </label>
                          
                        </div>

                        
                        
                       
                          <div class="control" data-reactid=".0.0.1">
                           
                            <select name="programa"  data-reactid=".0.0.1.0" class="active">                             
                             
                               <option>--seleccione uno--</option>

                               @foreach($programas as $programa)

                               
                               <option value='{{$programa->numero_de_programa}}'>{{$programa->nombre}}</option>


                              @endforeach
                              
                              
                           </select>
                            
                     <label data-reactid=".0.0.1.1">* Programa  </label>
                          </div>                      
                       

                        <p>* campos obligatorios </p>
                        <br>  
                        
         <input class="inputRegistrarLote" type="submit" value="registrar lote producto derivado" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection


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