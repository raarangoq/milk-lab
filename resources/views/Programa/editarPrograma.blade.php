@extends('layout.principal')

@section('contenido')
@include('alerts.request')

<main>
    <article>
        <section>
            <div id="stage" class="stage">

            <a href="listarPrograma">
              <img src="css/iconos/atras.png">
            </a>
                <form action="editarPrograma" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <input type="hidden" name="anteriorNumero_programa" value={{$programa->numero_de_programa}}> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR PROGRAMA</legend>

                         <div class="control" data-reactid=".0.0.1">
                            <input name="numero_programa" type="number"  required="" data-reactid=".0.0.1.0" class="active" value={{$programa->numero_de_programa}}>
                            <label data-reactid=".0.0.1.1">* Numero de programa:</label>
                        </div>
                         <div class="control" data-reactid=".0.0.1">
                            <input name="nombre_programa" type="text"  required="" data-reactid=".0.0.1.0" class="active" value={{$programa->nombre}}>
                            <label data-reactid=".0.0.1.1">* Nombre de programa:</label>
                        </div>


                    
                        <div class="control" data-reactid=".0.0.6">
                            <select id="idtipo" name="tipo" data-reactid=".0.0.6.0" class="active" > 
                               

                              <option>{{$programa->tipo}}</option>
                              <option>Investigación</option>
                              <option>Extensión</option>
                              <option>Docencia</option>     

                            </select>
                            <label data-reactid=".0.0.6.1">* Tipo de Programa:</label>
                        </div>  


                        <div class="control" data-reactid=".0.0.7">
                            <select id="iden_ejecucion" name="en_ejecucion" data-reactid=".0.0.7.0" class="active"> 
                               
@if ($programa->en_ejecucion === 1)
   <option value="1">SI</option>
   <option value="0">NO</option>
@else
    <option value="0">NO</option>
     <option value="1">SI</option> 
@endif                  

                            </select>
                            <label data-reactid=".0.0.7.1">En ejecucion</label>
                        </div> 


                        <div class="control" data-reactid=".0.0.1">
                           <textarea  name="observaciones" rows="10" data-reactid=".0.0.1.0" class="active">{{$programa->observaciones}}</textarea>
                            <label data-reactid=".0.0.1.1">Observaciones:</label>
                        </div>


                        <div class="control" data-reactid=".0.0.6">
                            <select id="idusuario_responsable" name="usuario_responsable" data-reactid=".0.0.6.0" class="active" > 
                               
                               <option>{{$programa->usuario_responsable}}</option>
                                @foreach($usuarios as $user)

                                <option value={{$user->correo}}>{{$user->nombre}} -- {{$user->rol}} -- {{$user->correo}}</option>
                                @endforeach   
                             

                            </select>
                            <label data-reactid=".0.0.6.1">* Resposable:</label>
                        </div> 


                        <input type="submit" value="editar programa" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection






