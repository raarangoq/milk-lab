@extends('layout.principal')

@section('contenido')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarReactivo" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR REACTIVO</legend>

                         <div class="control" data-reactid=".0.0.1">
                           
                             <input name="nombre" type="text" id="name" placeholder="tipo de cava" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Nombre de Reactivo</label>
                        </div>              
                      
                    
                         <input type="submit" value="registrar Reactivo" data-reactid=".0.0.5">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endSection






