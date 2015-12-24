@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<style>
    @import url(css/3.TABLAS/css/style.css);
    @import url(css/4.MENSAJES/style.css);
</style>

<div>
    
   <a href="listarBodega">
    <img src="css/iconos/atras.png">
</a> 
</div>


<div class="wrapper">

    <div class="table">

        <div class="row header blue">
            <div class="cell">
                *Materia prima
            </div>
            <div class="cell">
                Fecha
            </div>
            <div class="cell">
                Entra
            </div>
            <div class="cell">
                Sale
            </div>
            <div class="cell">
                Motivo de salida
            </div>
            <div class="cell">
                Total
            </div>
            <div class="cell">
                Existencia
            </div>
            <div class="cell">
                Observaciones
            </div>
            <div class="cell">
                Programa
            </div>
            <div class="cell">
                Responsable
            </div>
            <div class="cell green">
                Editar
            </div>
            <div class="cell red">
                Borrar
            </div>
        </div>


        @foreach($flujos_de_bodega as $flujo)


        <div class="row">
            <div class="cell" align="center">
                {{$flujo->materia_prima}}
            </div>
            <div class="cell">
                {{$flujo->fecha}}
            </div>
            <div class="cell">
                {{$flujo->entra}}
            </div>
            <div class="cell">
                {{$flujo->sale}}
            </div>
            <div class="cell">
                {{$flujo->motivo_de_salida}}
            </div>
            <div class="cell">
                {{$flujo->total}}
            </div>
            <div class="cell">
                {{$flujo->existencia}}
            </div>
            <div class="cell">
                {{$flujo->observaciones}}
            </div>
            <div class="cell">
                {{$flujo->programa}}
            </div>
            <div class="cell">
                {{$flujo->usuario_responsable}}
            </div>

            <div class="cell">
                <input class="inputEditar" id='{{$flujo->id}}' type="submit" value="editar" data-reactid=".0.0.7" >
                </div>
                <div class="cell">
                    <input class="inputBorrar" id='{{$flujo->id}}' type="submit" value="borrar" data-reactid=".0.0.7" >
                    </div>
        </div>



                @endforeach

                <div id="dialog-confirm"></div>




            </div>

<input class="inputRegistrar" type="submit" value="registrar control cava" data-reactid=".0.0.5">
        </div>




        <!-- FIN Contenido -->

        @endsection





        @section('ajaxEditar')

        <script>

        $(document).ready(function(){



function ConfirmacionBorrar(id_flujo) {
$("#dialog-confirm").html("Seguro quiere eliminar este flujo de bodega?");
        // Define the Dialog and its properties.
        $("#dialog-confirm").dialog({
resizable: true,
        modal: true,
        title: "Confirmacion de borrar",
        height: 300,
        width: 400,
        buttons: {
        "SI": function () {
        $(this).dialog('close');
                callback(true, id_flujo);
        },
                "NO": function () {
                $(this).dialog('close');
                        callback(false, id_flujo);
                }
        }
});
}



function callback(value, id_flujo) {
if (value){

var id_flujo_bodega = id_flujo;
        var codigo_bodega = {{$codigo_bodega}};
        document.location.href = "borrarFlujoBodega?id_flujo_bodega=" + id_flujo_bodega + "&" + "codigo_bodega=" + codigo_bodega;
} else {
//alert("Rejected");
return false;
}
}



$(".inputBorrar").click(function(e){

var id_flujo = e.target.id;
        ConfirmacionBorrar(id_flujo);
});
        $(".inputEditar").click(function(e){

var id = e.target.id;
        var id_flujo_bodega = id;
        var codigo_bodega = {{$codigo_bodega}};
        //alert(id_flujo_bodega);
        //alert({{$codigo_bodega}});

        document.location.href = "editarFlujoBodega?codigo_bodega=" + codigo_bodega + "&" + "id_flujo_bodega=" + id_flujo_bodega;
        //document.location.href = "editarBodega?codigo_bodega=" + codigo_bodega;

});




$(".inputRegistrar").click(function(e){

     var codigo_bodega = {{$codigo_bodega}};

document.location.href = "registrarFlujoBodega?codigo_bodega="+'{{$codigo_bodega}}' ;
});








});

        </script>




        @endsection
