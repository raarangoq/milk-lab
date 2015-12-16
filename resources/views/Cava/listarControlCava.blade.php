@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>



<a href="listarCava">
    <img src="css/iconos/atras.png">
</a>

<div class="wrapper">

    <div class="table">
        <div class="row header blue">
            <div class="cell">
                Fecha
            </div>
            <div class="cell">
                Humedad
            </div>
            <div class="cell">
                Temperatura
            </div>
            <div class="cell">
                Usuario realizador
            </div>

            <div class="cell">
                Borrar
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


    <!-- FIN Contenido -->

    @endsection


    @section('ajaxEditar')
    <script>

        $(document).ready(function(){

function ConfirmacionBorrar(fecha) {
$("#dialog-confirm").html("Seguro quiere eliminar este control de cava?");
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
                callback(true, fecha);
        },
                "NO": function () {
                $(this).dialog('close');
                        callback(false, fecha);
                }
        }
});
}





function callback(value, fecha) {
if (value) {
//return true;
// alert(id);
var id_fecha = fecha;
        var id_cava = {{$id_cava}};
        document.location.href = "borrarControlCava?fecha=" + id_fecha + "&" + "id_cava=" + id_cava;
        //alert(id_cava);

} else {
//alert("Rejected");
return false;
}
}

//$('.inputBorrar').click(ConfirmacionBorrar);


$(".inputBorrar").click(function(e){

var fecha = e.target.id;
        ConfirmacionBorrar(fecha);
        //alert(confirmacion);
        //document.location.href = "editarCava?id=" + id;


});
        $(".inputEditar").click(function(e){
var id = e.target.id;
        //alert(id);
        document.location.href = "editarCava?id=" + id;
});
        $(".inputRegistrar").click(function(e){
var id = e.target.id;
        //alert(id);
        document.location.href = "registrarControlCava?id=" + id;
});
        //document.location.href = "borrarControlCava?id_cava="+ id_cava;

        //alert(id_cava+id);




});

    </script>

    @endsection
