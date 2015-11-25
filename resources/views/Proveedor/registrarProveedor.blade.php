@extends('layout.principal')

@section('contenido')



<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarProveedor" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR PROVEEDOR</legend>

                         <div class="control" data-reactid=".0.0.1">
                           
                             <input name="NIT" type="text" id="idnit" placeholder="NIT : " required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* NIT de proveedor</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">
                            <input name="nombre"  type="text" id="idnmbre" placeholder="NOMBRE DE PROVVEDOR" required="" data-reactid=".0.0.2.0" class="active">
                            <label data-reactid=".0.0.2.1">* Nombre de Proveedor</label>
                        </div>

                         <div class="control" data-reactid=".0.0.3">
                           
                             <input name="telefono" type="number" id="idtelefono" placeholder="TELEFONO : "  data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">Telefono</label>
                        </div>

                       
                        <div class="control" data-reactid=".0.0.4">
                            <input name="direccion"  type="text" id="iddireccion" placeholder="DIRECCION : "  data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">Direccion</label>
                        </div>

                        
                        <input type="submit" value="registrar proveedor" data-reactid=".0.0.5">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endSection






