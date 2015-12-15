@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<style>
    @import url(css/3.TABLAS/css/style.css);
    @import url(css/4.MENSAJES/style.css);
</style>






<div class="wrapper">

    <div class="table">

        <div class="row header blue">
            <div class="cell">
                NIT
            </div>
            <div class="cell">
                Nombre
            </div>
            <div class="cell">
                Telefono
            </div>
            <div class="cell">
                Direccion
            </div>
            <div class="cell">
                Habilitado?
            </div>
            <div class="cell">
                Editar
            </div>
        </div>




        @foreach($proveedores as $proveedor)


        <div class="row">
            <div class="cell" align="center">
                {{$proveedor->NIT}}
            </div>
            <div class="cell">
                {{$proveedor->nombre}}
            </div>
            <div class="cell">
                {{$proveedor->telefono}}
            </div>
            <div class="cell" align="center">
                {{$proveedor->direccion}}
            </div>



            @if ($proveedor->habilitado === 1)
            <div class="cell" align="center">
                SI
                @else
                <div class="cell red" align="center">    
                    NO
                    @endif

                </div>

                <div class="cell">
                    <input class="inputEditar" type="submit" id={{$proveedor->NIT}} value="editar" data-reactid=".0.0.7" >
                    </div>
                </div>



                @endforeach



            </div>
            <input class="inputRegistrar" type="submit" value="registrar proveedor" data-reactid=".0.0.5">
        </div>




        <!-- FIN Contenido -->

        @endsection





        @section('ajaxEditar')


        <script>

            $(document).ready(function () {

                $(".inputEditar").click(function (e) {
                    var id = e.target.id;

                    var NIT = id;
                    //alert(id);
                    document.location.href = "editarProveedor?NIT=" + NIT;


                });



                $(".inputRegistrar").click(function (e) {
                    var id = e.target.id;
                    //alert(id);
                    document.location.href = "registrarProveedor";


                });

            });

        </script>

        @endsection
