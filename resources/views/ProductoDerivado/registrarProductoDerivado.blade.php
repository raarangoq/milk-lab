@extends('layout.principal')

@section('contenido')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="editarBodega" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR PRODUCTO DERIVADO</legend>

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

                        <div class="control" data-reactid=".0.0.3.0">
                            <input name="nombre"  type="number" id="name" placeholder="Descripcion fisica" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">Descripcion fisica </label>
                       </div>

                         <div class="control" data-reactid=".0.0.3.0">
                            <input name="nombre"  type="number" id="name" placeholder="Descripcion fisica" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Tiempo de vencimiento </label>
                       </div>
                         <div class="control" data-reactid=".0.0.3.0">
                            <input name="nombre"  type="number" id="name" placeholder="Descripcion fisica" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">Instrucciones de la etiqueta </label>
                       </div>
                       
                         <div class="control" data-reactid=".0.0.1">

                            <select name"tipo" data-reactid=".0.0.1.0" class="active">
                             
                               <option>Ambiente</option>
                              <option>Refrigeración</option>
                              <option>Congelación </option>
                              
                           </select>
                            
                            <label data-reactid=".0.0.1.1">*  Temperatura de almacenamiento  </label>
                        </div>

                           <div class="control" data-reactid=".0.0.1">

                            <select name"tipo" data-reactid=".0.0.1.0" class="active">
                             
                               <option>Litro</option>
                              <option>Kilo</option>
                           
                           </select>
                            
                            <label data-reactid=".0.0.1.1">*  Unidad de medidad  </label>
                        </div>
                
                
                                        

                        <input type="submit" value="Editar bodega" data-reactid=".0.0.6">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endSection







