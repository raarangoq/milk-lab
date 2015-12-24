@extends('layout.principal')

@section('contenido')



<main>
    <article>
        <section>
            <div id="stage" class="stage">
            <div>
            <a href="listarProveedor">
                <img src="css/iconos/atras.png">
              </a> 
           </div>  
                <form action="editarProveedor" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <input type="hidden" name="anteriorNIT" value='{{$proveedor->NIT}}'> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR PROVEEDOR</legend>

                        <div class="control" data-reactid=".0.0.1">

                            <input name="NIT" type="number" id="idnit" required="" data-reactid=".0.0.1.0" class="active" value=' {{$proveedor->NIT}}'>
                            <label data-reactid=".0.0.1.1">* NIT de proveedor</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">
                            <input name="nombre"  type="text" id="idnmbre" required="" data-reactid=".0.0.2.0" class="active" value='{{$proveedor->nombre}}'>
                            <label data-reactid=".0.0.2.1">* Nombre de Proveedor</label>
                        </div>

                        <div class="control" data-reactid=".0.0.3">

                            <input name="telefono" type="number" id="idtelefono"   data-reactid=".0.0.3.0" class="active" value='{{$proveedor->telefono}}'>
                            <label data-reactid=".0.0.3.1">Telefono</label>
                        </div>


                        <div class="control" data-reactid=".0.0.4">
                            <input name="direccion"  type="text" id="iddireccion"   data-reactid=".0.0.4.0" class="active" value='{{$proveedor->direccion}}'>
                            <label data-reactid=".0.0.4.1">Direccion</label>
                        </div>

                        <div class="control" data-reactid=".0.0.7">
                            <select id="idhabilitado" name="habilitado" data-reactid=".0.0.7.0" class="active"> 

                                @if ($proveedor->habilitado === 1)
                                <option value="1">SI</option>
                                <option value="0">NO</option>
                                @else
                                <option value="0">NO</option>
                                <option value="1">SI</option> 
                                @endif                  

                            </select>
                            <label data-reactid=".0.0.7.1">Habilitado</label>
                        </div>  


                        <input type="submit" value="editar proveedor" data-reactid=".0.0.5">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endSection






