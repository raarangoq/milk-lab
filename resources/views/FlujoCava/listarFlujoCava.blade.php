@extends('layout.principal')

@section('contenido')

@include('alerts.request')


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<!-- LISTAR FLUJO DE CAVA-->

<!-- FIN DE LISTAR FLUJO DE CAVA-->

<!-- FILTRAR BUSQUEDA-->

<div class="wrapper">

    <div class="table">

        <div class="row header blue">
            <div class="cell">
                FILTRAR CAVA
            </div>
        </div>

        <div class="row">

            <div class="cell">
                Fecha
            </div>
            <div class="cell">

                <input class="active" type="date" name="id">
            </div>

            <div class="cell">
                Programa
            </div>
            <div class="cell">
                <select name="producto_derivado" data-reactid=".0.0.´6.0" class="active">
                    <option>--seleccionar --</option>

                </select>
            </div>
        </div>


        <div class="row">

            <div class="cell">
                Producto derivado
            </div>
            <div class="cell">
                <select name="producto_derivado" data-reactid=".0.0.´6.0" class="active">
                    <option>--seleccionar --</option>
                </select>
            </div>

            <div class="cell">
                Responsable
            </div>
            <div class="cell">
                <select name="responsable" data-reactid=".0.0.´6.0" class="active">
                    <option>--seleccionar --</option>
                </select>
            </div>

        </div>

        <div class="row">
            <div class="cell">
                Tamano
            </div>
            <div class="cell">
                <select name="tamano" data-reactid=".0.0.´6.0" class="active">
                    <option>--seleccionar --</option>
                </select>
            </div>

            <div class="cell">
                Cava
            </div>
            <div class="cell">
                <select name="cava" data-reactid=".0.0.´6.0" class="active">
                    <option>--seleccionar --</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="cell">
                Motivo de salida
            </div>
            <div class="cell">
                <select name="motivo_de_salida" data-reactid=".0.0.´6.0" class="active">
                    <option>--seleccionar --</option>
                </select>
            </div>


            <div class="cell">

                <input value="filtrar" class="active" type="submit">
            </div>



        </div>



    </div>


</div>
<!--FIN DE FILTRAR BUSQUEDA -->




<!-- FLUJO DE CAVAS-->

<div class="wrapper">

    <div class="table">


        <div class="row header blue">

            <div class="cell">
                Hora
            </div>
            <div class="cell">
                Producto derivado
            </div>
            <div class="cell">
                Tamaño
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
                total
            </div>
            <div class="cell">
                Existencia
            </div>
            <div class="cell">
                Programa
            </div>
            <div class="cell">
                Responsable
            </div>
            <div class="cell">
                Observaciones
            </div>
            <div class="cell green">
               Editar
            </div>
            <div class="cell red">
                Borrar
            </div>
        </div>

         @foreach($flujos_de_cava as $flujo)

          <div class="row">
            <div class="cell" align="center">
               {{$flujo->fecha}}
            </div>
            <div class="cell">
                {{$flujo->producto_derivado}}
            </div>
            <div class="cell">
                {{$flujo->tamano}}
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
                {{$flujo->programa}}
            </div>
            <div class="cell">
                {{$flujo->usuario_responsable}}
            </div>
            <div class="cell">
                {{$flujo->observaciones}}
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

</div>


<!-- FIN FLOJO DE CAVA -->

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

var id_flujo_cava = id_flujo;
        var codigo_cava = {{$codigo_cava}};
        document.location.href = "borrarFlujoCava?id_flujo_cava=" + id_flujo_cava + "&" + "codigo_cava=" + codigo_cava;
} else {
//alert("Rejected");
return false;
}
}



$(".inputBorrar").click(function (e){

var id_flujo = e.target.id;
        ConfirmacionBorrar(id_flujo);
});
        $(".inputEditar").click(function(e){

var id = e.target.id;
        var id_flujo_cava = id;
        var codigo_cava = {{$codigo_cava}};
        

        document.location.href = "editarFlujoCava?codigo_cava=" + codigo_cava + "&" + "id_flujo_cava=" + id_flujo_cava;
   

});




$(".inputRegistrar").click(function(e){

     var codigo_cava = {{$codigo_cava}};

document.location.href = "registrarFlujoCava?codigo_cava="+'{{$codigo_cava}}' ;
});








});

        </script>




        @endsection



