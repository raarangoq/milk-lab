@extends('layout.principal')

@section('contenido')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="editarCava" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR BODEGA</legend>

                        <div class="control" data-reactid=".0.0.3.0">
                            <input name="temperatura_maxima "  type="number" id="name" placeholder="temperatura_maxima" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Codigo </label>
                       </div>                   

                        <div class="control" data-reactid=".0.0.1">

                            <select name"tipo" data-reactid=".0.0.1.0" class="active">
                             
                             <option>Bodega1</option>
                              <option>Bodega2</option>
                              <option>Bodega3</option>

                            </select>
                            
                            <label data-reactid=".0.0.1.1">* Tipo</label>
                        </div>

                    
                       
                        <div class="control" data-reactid=".0.0.1">

                            <select name"tipo" data-reactid=".0.0.1.0" class="active">
                             
                             <option> Si</option>
                              <option>No </option>
                              

                            </select>
                            
                            <label data-reactid=".0.0.1.1">* En uso</label>
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






