@extends('layout.principal')

@section('contenido')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarCava" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR PROGRAMA</legend>

                         <div class="control" data-reactid=".0.0.1">
                            <input name="numero_programa" type="number" placeholder="numero de programa" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Numero de programa :</label>
                        </div>
                         <div class="control" data-reactid=".0.0.1">
                            <input name="nombre_programa" type="text" placeholder="numero de programa" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Nombre de programa :</label>
                        </div>
                        <div class="control" data-reactid=".0.0.2">
                            <select name"tipo" data-reactid=".0.0.2.0" class="active">
                              <option>Investigación</option>
                              <option>Extensión' </option>
                              <option>Docencia</option>

                            </select>
                            <label data-reactid=".0.0.2.1">* Tipo de Programa :</label>
                        </div>

                        <div class="control" data-reactid=".0.0.1">
                           <textarea name="observaciones" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1">Observaciones :</label>
                        </div>


                    
                    <div class="control" data-reactid=".0.0.2">
                            <select name"tipo" data-reactid=".0.0.2.0" class="active">
                              <option>Investigación</option>
                              <option>Extensión' </option>
                              <option>Docencia</option>

                            </select>
                            <label data-reactid=".0.0.2.1">* Tipo de Programa :</label>
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






