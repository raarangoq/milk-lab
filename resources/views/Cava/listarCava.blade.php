@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<div class="wrapper">

    <div class="table">

        <div class="row header blue">
            <div class="cell">
                FILTRAR CAVA
            </div>

        </div>

        <div class="row">

            <div class="cell">
                Codigo
            </div>
            <div class="cell">

                <input id ="idcodigo" name="codigo" placeholder="filtrar codigo" class="active" type="text" >
            </div>

            <div class="cell">
                Tipo
            </div>
            <div class="cell">
                <select name="idtipo" name="tipo" data-reactid=".0.0.´6.0" class="active">
                    <option>--seleccionar tipo--</option>
                    <option>Congelamiento</option>
                    <option>Maduración</option>
                    <option>Producto terminado</option>
                </select>

            </div>

        </div>


        <div class="row">
            <div class="cell">
                Temperatura minima
            </div>
            <div class="cell">
                <input id="idtemperatura_minima" placeholder="temperatura minima" class="active" type="number">
            </div>

            <div class="cell">
                En uso
            </div>
            <div class="cell">
                <select id="iden_uso" name="en_uso" data-reactid=".0.0.7.0" class="active"> 

                    <option>-seleccionar uso-</option>
                    <option>SI</option>
                    <option>NO</option>                      


                </select>
            </div>



        </div>

        <div class="row">
            <div class="cell">
                Temperatura maxima
            </div>
            <div class="cell">
                <input placeholder="temperatura maxima" class="active" type="text">
            </div>


            <div class="cell">

                <input id ="" value="filtrar" class="inputFiltrar" type="submit">
            </div>
            <div class="cell">

            </div>


        </div>



    </div>


</div>






<div class="wrapper">

    <div class="table">


        <div class="row header blue">

            <div class="cell">
                Codigo
            </div>
            <div class="cell">
                Tipo
            </div>
            <div class="cell">

                Temperatura minima
            </div>
            <div class="cell">
                Temperatura maxima
            </div>
            <div class="cell">
                En uso?

            </div>
            <div class="cell green">
                Editar
            </div>
            <div class="cell">
                Control de cava
            </div>
        </div>


        @foreach($cavas as $cava)


        <div class="row">
            <div class="cell" align="center">
                {{$cava->id}}
            </div>

            <div class="cell">
                {{$cava->tipo}}
            </div>

            <div class="cell">
                {{$cava->temperatura_minima}}
            </div>

            <div class="cell">
                {{$cava->temperatura_maxima}}

            </div>

            @if ($cava->en_uso === 1)
            <div class="cell" align="center">
                SI
                @else
                <div class="cell red" align="center">    
                    NO

                    @endif

                </div>

                <div class="cell">
                                    <a class="inputEditar">
                    <img src="css/iconos/editar2.png" id='{{$cava->id}}' width="35" height="35">
                </a>
                
                    <input class="inputEditar" type="submit" id={{$cava->id}} value="editar" data-reactid=".0.7" >

                    </div>

                    <div class="cell">
                    <a class="inputVer">
                           <img src="css/iconos/ver.png" id='{{$cava->id}}' width="35" height="35">
                        </a>
                    
                        <input class="inputVer" type="submit" id={{$cava->id}} value=" ver " data-reactid=".0.0.7" >
                        
                        </div>

                    </div>


                    @endforeach
                    <br>
                    <nav>
                        {!!$cavas->render()!!}
                    </nav>

                </div>

                <a class="inputRegistrar">
   <img src="css/iconos/agregar3.png" width="40" height="40">
</a>

                <input class="inputRegistrar" type="submit" value="registrar cava" data-reactid=".0.0.5">


            </div>

        </div>


        <!-- FIN Contenido -->

        @endsection

        @section('ajaxEditar')


        <script>

            $(document).ready(function () {

                $(".inputEditar").click(function (e) {
                    var id = e.target.id;
                    //alert(id);

                    document.location.href = "editarCava?id=" + id;

                });


                $(".inputVer").click(function (e) {
                    var id = e.target.id;
                    //alert(id);
                    document.location.href = "listarControlCava?id=" + id;


                });


                $(".inputRegistrar").click(function (e) {
                    var id = e.target.id;
                    //alert(id);
                    document.location.href = "registrarCava";


                });

                $(".inputFiltrar").click(function (e) {

                    var codigo = $("#idcodigo").val();
                    var en_uso = $("#iden_uso").val();
                    var tipo = $("#idtipo").val();
                    var temperatura_minima = $("#idtemperatura_minima").val();
                    var temperatura_maxima = $("#idtemperatura_maxina").val();



                    document.location.href = "filtrarCava?codigo=" + codigo + "&en_uso=" + en_uso + "&tipo=" + tipo + "&temperatura_minima=" + temperatura_minima + "&temperatura_maxima=" + temperatura_maxima;

                });

            });

        </script>

        @endsection
