@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                        <a href="listarMateriaPrima">
                    <img src="css/iconos/atras.png">
                </a>
                <form action="registrarMateriaPrima" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR MATERIA PRIMA</legend>


                        <div class="control" data-reactid=".0.0.6">
                            <select id="idtipo" name="tipo" data-reactid=".0.0.6.0" class="active" > 

                                <option>Comestible</option>
                                <option>Empaque</option>    

                            </select>
                            <label data-reactid=".0.0.6.1">* Tipo:</label>
                        </div>  

                        <div class="control" data-reactid=".0.0.1">
                            <input name="nombre" type="text" placeholder="nombre de materia prima" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Nombre:</label>
                        </div>

                        <div class="control" data-reactid=".0.0.6">
                            <select id="idunidad_de_medida" name="unidad_de_medida" data-reactid=".0.0.6.0" class="active" > 

                                <option>Litro</option>
                                <option>Kilo</option>    

                            </select>
                            <label data-reactid=".0.0.6.1">* Tipo:</label>
                        </div>  

                        <p>* campos obligatorios </p>
                        <br>


                        <input type="submit" value="registrar materia prima" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection






