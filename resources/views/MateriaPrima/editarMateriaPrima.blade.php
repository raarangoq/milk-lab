@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="editarMateriaPrima" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <input type="hidden" name="nombreAnterior" value={{$materiaPrima->nombre}}>
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR MATERIA PRIMA</legend>


                        <div class="control" data-reactid=".0.0.6">
                            <select id="idtipo" name="tipo" data-reactid=".0.0.6.0" class="active" > 

                                <option>{{$materiaPrima->tipo}}</option>  
                                <option>Comestible</option>
                                <option>Empaque</option>    

                            </select>
                            <label data-reactid=".0.0.6.1">* Tipo:</label>
                        </div>  

                        <div class="control" data-reactid=".0.0.1">
                            <input name="nombre" type="text" value={{$materiaPrima->nombre}} required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Nombre:</label>
                        </div>

                        <div class="control" data-reactid=".0.0.6">
                            <select id="idunidad_de_medida" name="unidad_de_medida" data-reactid=".0.0.6.0" class="active" > 

                                <option>{{$materiaPrima->unidad_de_medida}}</option>
                                <option>Litro</option>
                                <option>Kilo</option>    

                            </select>
                            <label data-reactid=".0.0.6.1">* Tipo:</label>
                        </div>  


                        <input type="submit" value="editar materia prima" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection






