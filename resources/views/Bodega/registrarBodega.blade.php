@extends('layout.principal')

@section('contenido')
@include('alerts.request') 

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarBodega" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR BODEGA</legend>

                         <div class="control" data-reactid=".0.0.1">
                            <input name="codigo" type="text" id="name" placeholder="codigo de bodega" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Codigo Bodega</label>
                        </div>
                        
                         <div class="control" data-reactid=".0.0.2">

                            <select name="tipo" id="idtipo" data-reactid=".0.0.2.0" class="active">
                             <option>Reactivo</option>
                              <option>Materia prima</option>
                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Tipo de Bodega</label>
                        </div>
                    

                        <input type="submit" value="registrar bodega" data-reactid=".0.0.5">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection






