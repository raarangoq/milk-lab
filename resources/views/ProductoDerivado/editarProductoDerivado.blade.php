@extends('layout.principal')

@section('contenido')


<style>
    @import url(css/3.TABLAS/css/style.css);
    @import url(css/4.MENSAJES/style.css);
</style>

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <a href="listarProductoDerivado">
                    <img src="css/iconos/atras.png">
                </a>
                <form action="listarProductoDerivado" method="get" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


                    <fieldset data-reactid=".0.0">

                        <legend data-reactid=".0.0.0">EDITAR PRODUCTO DERIVADO</legend> 

                        <div class="control" data-reactid=".0.0.3.0">
                            <input value='{{$producto_derivado->nombre}}' name="nombre"  type="text" id="name" placeholder="nombre" required=""  data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Nombre </label>
                        </div> 
                        <div class="control" data-reactid=".0.0.1">

                            <select name="tipo" data-reactid=".0.0.1.0" class="active">

                                <option>{{$producto_derivado->tipo}}</option>
                                <option>Bebida</option>
                                <option>Dulce</option>
                                <option>Helado </option>
                                <option>Queso </option>
                            </select>

                            <label data-reactid=".0.0.1.1">* Tipo </label>
                        </div>
                        <div class="control" data-reactid=".0.0.1">
                            <textarea  name="descripcion_fisica" rows="5"  data-reactid=".0.0.1.0" class="active">{{$producto_derivado->descripcion_fisica}} </textarea>
                            <label data-reactid=".0.0.1.1">Descripcion fisica </label>
                        </div>

                        <div class="control" data-reactid=".0.0.3.0">
                            <br><input  value='{{$producto_derivado->tiempo_de_vencimiento}}' name="tiempo_de_vencimiento"  type="number" id="name" placeholder="Descripcion fisica dias" srequired="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Tiempo de vencimiento (dias)</label>
                        </div>

                        <div class="control" data-reactid=".0.0.3.0">
                            <br> <textarea name="instrucciones_de_la_etiqueta" rows="5"  data-reactid=".0.0.3.0" class="active">{{$producto_derivado->instrucciones_de_la_etiqueta}}</textarea>
                            <label data-reactid=".0.0.3.1">Instrucciones de la etiqueta </label>
                        </div>

                        <div class="control" data-reactid=".0.0.1">

                            <br><select name="temperatura_de_almacenamiento" data-reactid=".0.0.1.0" class="active">

                                <option>{{$producto_derivado->temperatura_de_almacenamiento}}</option>
                                <option>Ambiente</option>
                                <option>Refrigeración</option>
                                <option>Congelación </option>

                            </select>

                            <label data-reactid=".0.0.1.1">*  Temperatura de almacenamiento  </label>
                        </div>
                        <div class="control" data-reactid=".0.0.1">

                            <select name="unidad_de_medida" data-reactid=".0.0.1.0" class="active">


                                <option>{{$producto_derivado->unidad_de_medida}}</option>
                                <option>Litro</option>
                                <option>Kilo</option>

                            </select>

                            <label data-reactid=".0.0.1.1">*  Unidad de medidad  </label>
                        </div>   





                        <div class="wrapper" style="padding-left: 0px;">


                            <div class="table">

                                <div class="row header green">
                                    <center>TAMAÑO</center> 
                                </div>

                                <div class="row header green">


                                    <div class="cell">
                                        *Cantidad
                                    </div>
                                    <div class="cell">
                                        *Tipo
                                    </div>
                                    <div class="cell">
                                        *Precio
                                    </div>

                                    <div class="cell">

                                    </div>

                                    <div>

                                    </div>

                                </div>



                                @foreach($tamanios as $index => $tamano)

                                <div class="row" id="idrow{{$index}}">

                                    <div class="cell"align="center" >
                                        <input class=""   type="number" name="cantidad{{$index}}" value='{{$tamano->cantidad}}'>        
                                    </div>
                                    <div class="cell"align="center" >
                                        <select name="tipo{{$index}}">
                                            <option>{{$tamano->tipo}}</option>
                                            <option>Bolsa</option>
                                            <option>Pote</option>
                                            <option>Vaso</option>
                                            <option>Cuarto</option>
                                            <option>Caja</option>
                                            <option>Bloque</option>

                                        </select>

                                    </div>
                                    <div class="cell"align="center" >
                                        <input class=""   type="number" name="precio{{$index}}" value={{$tamano->precio}}>
                                    </div>

                                    <div class="cell">

                                        <input class="inputQuitarFila" id={{$index}} type='image' src="css/iconos/eliminar.png" width="35" height="35">eliminar

                                    </div>


                                </div>

                                @endforeach






                            </div>


            <a class="inputAgregarFila">
                    <img src="css/iconos/agregar.png"  width="35" height="35">
                </a>
<input class="inputAgregarFila" type="button" value="agregar fila" data-reactid=".0.0.5">
  <br><br>
                        </div>
                        
                      











                        <input class="inputEditarProducto" type="submit" value="editar producto derivado" data-reactid=".0.0.6.2">


                    </fieldset>

                </form>
            </div>

        </section>

    </article>

</main>


<!-- FIN Contenido -->

@endSection

@section('ajaxEditar')

<script>


    $(document).ready(function(){


    var fila = {{$cantidadTamanios}} - 1;
            var nombreAnterior = "{{$producto_derivado->nombre}}";
//alert(fila);




            $(".inputAgregarFila").click(function(e){

    fila++;
            var nuevaFila = "<div class='row' id='idrow" + fila + "' >";
            nuevaFila += "<div class='cell'>";
            nuevaFila += "<input type='number' name='cantidad" + fila + "'>";
            nuevaFila += "</div>";
            nuevaFila += "<div class='cell' align='center'>";
            nuevaFila += "<select name='tipo" + fila + "' data-reactid='.0.0.6.0' class='active'>";
            nuevaFila += "<option></option>";
            nuevaFila += "<option>Bolsa</option>";
            nuevaFila += "<option>Pote</option>";
            nuevaFila += "<option>Vaso</option>";
            nuevaFila += "<option>Cuarto</option>";
            nuevaFila += "<option>Caja</option>";
            nuevaFila += "<option>Bloque</option>";
            nuevaFila += "</select>";
            nuevaFila += "</div>";
            nuevaFila += "<div class='cell'>";
            nuevaFila += "<input type='number' name='precio" + fila + "'>";
            nuevaFila += "</div>";
            nuevaFila += "<div class='cell'>";
            nuevaFila += "<input class='inputQuitarFila' id='" + fila + "' type='image' src='css/iconos/eliminar.png' width='35' height='35' data-reactid='.0.0.6.2'> eliminar";
//nuevaFila+="<input class='borrar' id='ida' type='submit' value='quitar'  onclick='quitar()'  onChange='myFunction()' data-reactid='.0.0.6.2'>";

//nuevaFila+="<input class='inputQuitarFila' name='loco' type='submit' value='quitar' data-reactid='.0.0.5'>";


            nuevaFila += "</div>";
            nuevaFila += "</div>";
            $(".table").append(nuevaFila);
            $(".inputQuitarFila").off('click');
            $(".inputQuitarFila").on('click', function() {


    //alert('El valor es: ' + $(this).data('val'));

    var idfila = $(this).attr("id");
            //alert(idfila);

            // $("#idrow1").remove();

            //alert(idfila);

            $("#idrow" + idfila).remove();
            fila--;
    });
            });
            $(".inputQuitarFila").on('click', function() {


    //alert('El valor es: ' + $(this).data('val'));

    var idfila = $(this).attr("id");
            //alert(idfila);

            // $("#idrow1").remove();

            //alert(idfila);

            $("#idrow" + idfila).remove();
            //fila--;



    });
            $(".inputEditarProducto").click(function(e){

//alert(nombreAnterior);

    var vectorAtt = [];
            Atts = {};
            var nombre = ($("input[name=nombre]").val());
            var tipo = ($("select[name=tipo]").val());
            var descripcion_fisica = ($("textarea[name=descripcion_fisica]").val());
            var tiempo_de_vencimiento = ($("input[name=tiempo_de_vencimiento]").val());
            var instrucciones_de_la_etiqueta = ($("textarea[name=instrucciones_de_la_etiqueta]").val());
            var temperatura_de_almacenamiento = ($("select[name=temperatura_de_almacenamiento]").val());
            var unidad_de_medida = ($("select[name=unidad_de_medida]").val());
            Atts["nombreAnterior"] = nombreAnterior;
            Atts["nombre"] = nombre;
            Atts["tipo"] = tipo;
            Atts["descripcion_fisica"] = descripcion_fisica;
            Atts["tiempo_de_vencimiento"] = tiempo_de_vencimiento;
            Atts["instrucciones_de_la_etiqueta"] = instrucciones_de_la_etiqueta;
            Atts["temperatura_de_almacenamiento"] = temperatura_de_almacenamiento;
            Atts["unidad_de_medida"] = unidad_de_medida;
            vectorAtt.push(Atts);
            aInfoAtributos = JSON.stringify(vectorAtt);
//alert(aInfoAtributos);


            var vectorDeTamanio = [];
            item = {};
            for (var i = 0; i < fila + 1; i++) {


    var tipo = ($("select[name=tipo" + i + "]").val());
            var cantidad = ($("input[name=cantidad" + i + "]").val());
            var precio = ($("input[name=precio" + i + "]").val());
            item = {};
            if (tipo !== ''
                    && cantidad !== ''
                    && precio !== ''
                    ){
    item["tipo"] = tipo;
            item["cantidad"] = cantidad;
            item["precio"] = precio;
            vectorDeTamanio.push(item);
    }

    }



    aInfoTamanio = JSON.stringify(vectorDeTamanio);
//alert(aInfoTamanio);


            var cadenaFormulario = "&atributosProducto=" + aInfoAtributos + "&tamanio=" + aInfoTamanio;
            $.ajax({
            data: cadenaFormulario,
                    dataType: "html",
                    type: 'GET',
                    url : 'editarProductoDerivadoAJAX',
                    processData: false,
                    contentType: false,
                    success: function(r){

                    //alert(r);

                    alert("SE EDITO EL PRODUCTO EXITOSAMENTE");
                    }
            });
            });
            });


</script>

@endSection








