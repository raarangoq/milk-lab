@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="registrarPrograma" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR PROGRAMA</legend>

                         <div class="control" data-reactid=".0.0.1">
                            <input name="numero_programa" type="number" placeholder="numero de programa" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Numero de programa:</label>
                        </div>
                         <div class="control" data-reactid=".0.0.1">
                            <input name="nombre_programa" type="text" placeholder="numero de programa" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">* Nombre de programa:</label>
                        </div>


                      

 <div class="control" data-reactid=".0.0.6">
                            <select id="idtipo" name="tipo" data-reactid=".0.0.6.0" class="active" > 
                               
                               <option>Investigación</option>
                              <option>Extensión</option>
                              <option>Docencia</option>     

                            </select>
                            <label data-reactid=".0.0.6.1">* Tipo de Programa:</label>
                        </div>  



                        <div class="control" data-reactid=".0.0.1">
                           <textarea  name="observaciones" rows="10" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1">Observaciones:</label>
                        </div>







 <div class="control" data-reactid=".0.0.6">
                            <select id="idusuario_responsable" name="usuario_responsable" data-reactid=".0.0.6.0" class="active" > 
                               
                               
                             @foreach($usuarios as $user)

<option value={{$user->correo}}>{{$user->nombre}} -- {{$user->rol}} -- {{$user->correo}}</option>
@endforeach   

                            </select>
                            <label data-reactid=".0.0.6.1">* Resposable:</label>
                        </div> 







                        <input type="submit" value="registrar programa" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection






