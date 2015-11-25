@extends('layout.principal')

@section('contenido')

<main>
    <article>
        <section>
            <div id="stage" class="stage">

            <a href="listarBodega">
              <img src="css/iconos/atras.png">
            </a>

                <form action="editarBodega" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <input type="hidden" name="anteriorCodigo" value={{$bodega->codigo}}> 

                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR BODEGA</legend>

                        <div class="control" data-reactid=".0.0.3.0">
                            <input name="codigo"  type="number" required="" data-reactid=".0.0.3.0" class="active" value={{$bodega->codigo}}>
                            <label data-reactid=".0.0.3.1">* Codigo </label>
                       </div>                   

                                              
                        <div class="control" data-reactid=".0.0.7">
                            <select id="idtipo" name="tipo" data-reactid=".0.0.7.0" class="active"> 
                               
@if ($bodega->tipo == "Reactivo")
   <option value="Reactivo">Reactivo</option>
   <option value="Materia prima">Materia prima</option>
@else
    <option value="Materia prima">Materia prima</option>
     <option value="Reactivo">Reactivo</option> 
@endif                  

                            </select>
                            <label data-reactid=".0.0.7.1">* Tipo de bodega</label>
                        </div> 

                    
                       
                        <div class="control" data-reactid=".0.0.7">
                            <select id="iden_uso" name="en_uso" data-reactid=".0.0.7.0" class="active"> 
                               
@if ($bodega->en_uso === 1)
   <option value="1">SI</option>
   <option value="0">NO</option>
@else
    <option value="0">NO</option>
     <option value="1">SI</option> 
@endif                  

                            </select>
                            <label data-reactid=".0.0.7.1">* En uso</label>
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







