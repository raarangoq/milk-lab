@extends('layout.principal')

@section('contenido')
<!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->

@if(Session::has('success'))

<div class="alert alert-success">

    {{Session::get("success")}}
</div>


@endif

<main>

    <article>
        <section>
            <div id="stage" class="stage">

                <a href="listarFlujoBodega?codigo_bodega={{$flujo_de_bodega->bodega}}">
                    <img src="css/iconos/atras.png">
                </a>


                <form action="editarFlujoBodega" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <input type="hidden" name="id_flujo_bodega" value={{$id_flujo_bodega}}> 


                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR FLUJO DE BODEGA</legend>

                        <div class="control" data-reactid=".0.0.2">

                            <select id="idmateria_prima" name="materia_prima" data-reactid=".0.0.7.0" class="active"> 

                                <option value={{$flujo_de_bodega->materia_prima}}>{{$flujo_de_bodega->materia_prima}} -- {{$vectorINFO[1]}}</option>                            
                                @foreach($materiasPrimas as $materiasPrima)
                                <option value={{$materiasPrima->nombre}}>{{$materiasPrima->nombre}} -- {{$materiasPrima->unidad_de_medida}}</option>
                                @endforeach                

                            </select>

                            <label data-reactid=".0.0.2.1">* Materia Prima</label>
                        </div>


                        <div class="control" data-reactid=".0.0.3">
                            <input name="fecha"  type="date"  required="" data-reactid=".0.0.3.0" class="active" value={{$flujo_de_bodega->fecha}}>
                            <label data-reactid=".0.0.3.1">* Fecha</label>
                        </div>


                        <div class="control" data-reactid=".0.0.3">
                            <input name="entra"  type="number"  required="" data-reactid=".0.0.3.0" class="active" value={{$flujo_de_bodega->entra}}>
                            <label data-reactid=".0.0.3.1">* Entra</label>
                        </div>
                        <div class="control" data-reactid=".0.0.4">
                            <input name="sale" type="number" required="" data-reactid=".0.0.4.0" class="active" value={{$flujo_de_bodega->sale}}>
                            <label data-reactid=".0.0.4.1">* Sale</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">

                            <select  name="motivo_de_salida" data-reactid=".0.0.2.0" class="active">

                                @if ($flujo_de_bodega->motivo_de_salida == "Producción")
                                <option value="Producción">Producción</option>
                                <option value="Descarte">Descarte</option>
                                @else
                                <option value="Descarte">Descarte</option>
                                <option value="Producción">Producción</option> 
                                @endif  

                            </select>

                            <label data-reactid=".0.0.2.1">* Motivo de salida</label>
                        </div>

                        <div class="control" data-reactid=".0.0.4">
                            <input name="total" type="number" required="" data-reactid=".0.0.4.0" class="active" value={{$flujo_de_bodega->total}}>
                            <label data-reactid=".0.0.4.1">* Total</label>
                        </div>

                        <div class="control" data-reactid=".0.0.4">
                            <input name="existencia" type="number" required="" data-reactid=".0.0.4.0" class="active" value={{$flujo_de_bodega->existencia}}>
                            <label data-reactid=".0.0.4.1">* Existencia</label>
                        </div>

                        <div class="control" data-reactid=".0.0.1">
                            <textarea  name="observaciones" rows="10" data-reactid=".0.0.1.0" class="active">{{$flujo_de_bodega->observaciones}}</textarea>
                            <label data-reactid=".0.0.1.1">Observaciones:</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">

                            <select id="idprograma" name="programa" data-reactid=".0.0.7.0" class="active"> 

                                <option value={{$flujo_de_bodega->programa}}>{{$vectorINFO[2]}}</option>                            
                                @foreach($programas as $programa)
                                <option value={{$programa->numero_de_programa}}>{{$programa->nombre}}</option>
                                @endforeach                

                            </select>

                            <label data-reactid=".0.0.2.1">* Programa</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">

                            <select id="idusuario_responsable" name="usuario_responsable" data-reactid=".0.0.7.0" class="active"> 

                                <option value={{$flujo_de_bodega->usuario_responsable}}>{{$vectorINFO[3]}}--{{$vectorINFO[4]}}--{{$flujo_de_bodega->usuario_responsable}}</option>                            
                                @foreach($usuarios as $usuario)
                                <option value={{$usuario->correo}}>{{$usuario->nombre}}--{{$usuario->rol}}--{{$usuario->correo}}</option>
                                @endforeach                

                            </select>


                            <label data-reactid=".0.0.2.1">* Responsable</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">

                            <select id="idbodega" name="bodega" data-reactid=".0.0.7.0" class="active"> 

                                <option value={{$flujo_de_bodega->bodega}}>{{$vectorINFO[5]}}--{{$flujo_de_bodega->bodega}}</option>                            
                                @foreach($bodegas as $bodega)
                                <option value={{$bodega->codigo}}>{{$bodega->tipo}}--{{$bodega->codigo}}</option>
                                @endforeach                

                            </select>

                            <label data-reactid=".0.0.2.1">* Bodega</label>
                        </div>




                        <input type="submit" value="editar flujo de bodega" data-reactid=".0.0.5">

                    </fieldset>
                </form>
            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->

@endsection



@section('ajaxEditar')


<script>

    $(document).ready(function () {



    });
            });

</script>

@endsection
