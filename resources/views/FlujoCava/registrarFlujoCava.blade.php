@extends('layout.principal')

@section('contenido')

@include('alerts.request')


<div class="wrapper">

    <div class="table">

        <div class="row header blue">
            <div class="cell">

                REGISTRAR FLUJO DE CAVA
            </div>
        </div>

        <div class="row">
            <div class="control" data-reactid=".0.0.2">

                <select name="tipo" data-reactid=".0.0.2.0" class="active">
                    <option>Congelamiento</option>
                    <option>Maduración</option>
                    <option>Producto terminado</option>

                </select>

                <label data-reactid=".0.0.2.1">* Tipo </label>
            </div>
            <!-- cargar cavas que esten en uso (en_uso == 1)-->
            <div class="cell">
                <select name="tipo" data-reactid=".0.0.2.0" class="active">
                    @foreach($cavas as $cava)
                    <option>{{$cava->id}}</option>
                    @endforeach

                </select>

                <label data-reactid=".0.0.2.1">* id</label>
            </div>



        </div>

    </div>
</div>

<!-- REGISTRAR FLUJOS DE CAVAS-->

<div class="wrapper">

    <div class="table">
        <div class="row header blue">
            <div class="cell">
                * Fecha
            </div>
            <div class="cell">
                * Producto derivado
            </div>
            <div class="cell">
                * Tamaño
            </div>
            <div class="cell">
                * Entra
            </div>

            <div class="cell">
                * Sale
            </div>
            <div class="cell">
                * Motivo de salida
            </div>
            <div class="cell">
                * Total
            </div>
            <div class="cell">
                * Existencia
            </div>
            <div class="cell">
                Programa              	
            </div>
            <div class="cell">
                * Responsable              	
            </div>
            <div class="cell">
                Observaciones             	
            </div>
            <div class="cell">

            </div>

        </div>

        @foreach($controlDeCavaSeleccionado as $controlCava)

        <div class="row">
            <div class="cell" align="center">
                {{$controlCava->fecha}}
            </div>
            <div class="cell">
                {{$controlCava->humedad}}
            </div>
            <div class="cell">
                {{$controlCava->temperatura}}
            </div>
            <div class="cell">
                {{$controlCava->usuario_realizador}}
            </div>

            <div class="cell">
                <input class="inputBorrar" id={{$controlCava->fecha}}  type="submit"  value="borrar" data-reactid=".0.0.7" >
                </div>          

            </div>

            @endforeach

            <div id="dialog-confirm"></div>

        </div>
        <input class="inputRegistrar" id={{$id_cava}} type="submit" value="registrar control cava" data-reactid=".0.0.5">
    </div>