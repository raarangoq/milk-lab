@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
<input type="hidden" name="cava" value={{$codigo_cava}}>     

<div class="wrapper">

    <div class="table">

        <div class="row header blue">
            <div class="cell">

                REGISTRAR FLUJO DE CAVA
            </div>
        </div>


        <div class="row">
            <div class="cell">
              * Tipo
            </div>
            <div class="cell" >
                <select name="tipo" data-reactid=".0.0.2.0" class="active">
                    <option>Congelamiento</option>
                    <option>Maduración</option>
                    <option>Producto terminado</option>

                </select>

             </div>
         
               
            <div class="cell">
              * Id
            </div>
            <div class="cell"><!--  listar id de cavas que este en uso -->
               <select name="id" id="idid">
                 <option >--Listar ids--</option>
               </select>
              
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
                *Producto derivado
            </div>
            <div class="cell">
                *Tamaño
            </div>
            <div class="cell">
                *Entra
            </div>

            <div class="cell">
                *Sale
            </div>
            <div class="cell">
                *Motivo de salida
            </div>
            <div class="cell">
                *Total
            </div>
            <div class="cell">
                *Existencia
            </div>
            <div class="cell">
                Programa              	
            </div>
            <div class="cell">
                *Responsable              	
            </div>
            <div class="cell">
                Observaciones             	
            </div>
            <div class="cell">

            </div>

        </div>

       

        <div class="row">
            <div class="cell" >
                <input type="date" name="fecha0">
            </div>
            <div class="cell" align="center">
                <select name="producto_derivado" id="idproducto_derivado0" class="active">
                  <option></option>
                   @foreach($productosDerivados as $productoDerivado)
                    <option value={{$productoDerivado->nombre}}>
                      {{$productoDerivado->nombre}}
                    </option>
                    @endforeach  
                </select>
            </div>
            <div class="cell">
                <select name="tamano" id="idtamano">
                  <option >1</option>
                  <option >2</option>
                </select>
            </div>
            <div class="cell">
               <input type="number" name="entra0"> 
            </div>
            <div class="cell">
              <input type="number" name="sale0">
            </div>
            <div class="cell">
               <select name="motivo_de_salida0">
                    <option></option>
                    <option>Producción</option>
                    <option>Descarte</option>
                </select>
            </div>
            <div class="cell">
              <input type="text" name="total" class="active">
            </div>
            <div class="cell">
              <input type="text" name="existencia" class="active">
            </div>
            <div class="cell">
              <select id="idprograma" name="programa" class="active">
                <option ></option>
                @foreach($programas as $programa)
                <option value={{$programa->nombre}}>
                  {{$programa->nombre}}
                </option>
                @endforeach
              </select>
            </div>
            <div class="cell" align="center" >
               <select name="responsable" id="idresponsable" class="active">
                 <option></option>
                 @foreach($usuarios as $usuario)
                 <option value={{$usuario->nombre}}>
                    {{$usuario->nombre}}
                 </option>
                 @endforeach
               </select>
              
            </div>
            <div class="cell">
              <input type="text" name="observaciones" class="active">
            </div>


            <div class="cell">
                <input class="inputBorrar" id  type="submit"  value="quitar" data-reactid=".0.0.7" >
             </div>          

            </div>

           

            <div id="dialog-confirm"></div>

        </div>
        <div class="cell">
          <input class="inputAgregarFila" id type="submit"value="agregar fila">
           <input  type="" value="* campos obligatorios" align="center" class="active">
        </div>

        <input class="inputRegistrar" id type="submit" value="registrar flujo cava" data-reactid=".0.0.5">
    </div>

@endsection

@section('ajaxEditar')

<script>
$(document).ready(function(){
  var fila=2;
  $(".inputAgregarFila").click(function(e){

   fila++;
   var nuevaFila="<div class='row'>";

    nuevaFila += "<div class='cell'>";
    nuevaFila += "<input type='date' name='fecha" + fila + "'>";
    nuevaFila += "</div>";

   nuevaFila +="<div class='cell' align='center'>";
nuevaFila += "<select name='producto_derivado" + fila + "' data-reactid='.0.0.6.0' class='active'>";
    nuevaFila += "@foreach($productosDerivados as $productoDerivado)";
    nuevaFila += "<option value={{$productoDerivado->nombre}}>
   {{$productoDerivado->nombre}}</option>";
    nuevaFila += "@endforeach";
    nuevaFila += "</select>";
    nuevaFila += "</div>";

   nuevaFila +="<div class='cell' align='center'>";
nuevaFila += "<select name='tamano" + fila + "' data-reactid='.0.0.6.0' class='active'>";
    nuevaFila += "";
    nuevaFila += "<option >  1</option>";
    nuevaFila += "";
    nuevaFila += "</select>";
    nuevaFila += "</div>";
    

    nuevaFila += "<div class='cell'>";
    nuevaFila += "<input type='number' name='entra" + fila + "'>";
    nuevaFila += "</div>";

    nuevaFila += "<div class='cell'>";
    nuevaFila += "<input type='number' name='sale" + fila + "'>";
    nuevaFila += "</div>";

    nuevaFila += "<div class='cell' align='center'>";
  nuevaFila += "<select name='motivo_de_salida" + fila + "' data-reactid='.0.0.6.0' class='active'>";
    nuevaFila += "<option>Producción</option>";
    nuevaFila += "<option>Descarte</option>";
    nuevaFila += "</select>";
    nuevaFila += "</div>";

    nuevaFila += "<div class='cell'>";
    nuevaFila += "<input type='number' name='total" + fila + "'>";
    nuevaFila += "</div>";

    nuevaFila += "<div class='cell'>";
    nuevaFila += "<input type='number' name='existencia" + fila + "'>";
    nuevaFila += "</div>";

    nuevaFila += "<div class='cell' align='center'>";
    nuevaFila += "<select name='programa" + fila + "' data-reactid='.0.0.6.0' class='active'>";
    nuevaFila += "@foreach($programas as $programa)";
    nuevaFila += "<option value={{$programa->numero_de_programa}}>{{$programa->nombre}}</option>";
    nuevaFila += "@endforeach";
    nuevaFila += "</select>";
    nuevaFila += "</div>";

    nuevaFila += "<div class='cell' align='center'>";
    nuevaFila += "<select name='usuario_responsable" + fila + "' data-reactid='.0.0.6.0' class='active'>";
    nuevaFila += "@foreach($usuarios as $usuario)";
    nuevaFila += "<option value={{$usuario->correo}}>{{$usuario->nombre}}--{{$usuario->rol}}--{{$usuario->correo}}</option>";
    nuevaFila += "@endforeach";
    nuevaFila += "</select>";
    nuevaFila += "</div>";

    nuevaFila += "<div class='cell'>";
    nuevaFila += "<input type='number' name='observaciones" + fila + "'>";
    nuevaFila += "</div>";

    nuevaFila += "</div>";
    $(".table").append(nuevaFila);
  });

$(".inputRegistrar").click(function(e){
  var vectorDeFlujo = [];
     for(var i = 0; i< fila +1; i++)
{
       var fecha = ($("input[name=fecha" + i + "]").val());
       var producto_derivado = ($("select[name=producto_derivado" + i + "]").val());
       var tamano = ($("select[name=tamano"+ i +"]").val());
       var entra = ($("input[name=entra" + i + "]").val());
       var sale = ($("input[name=sale" + i + "]").val());
       var motivo_de_salida = ($("select[name=motivo_de_salida" + i + "]").val());
       var total = ($("input[name=total" + i + "]").val());
      var existencia = ($("input[name=existencia" + i + "]").val());
      var programa = ($("select[name=programa" + i + "]").val()); 
      var responsable = ($("select[name=usuario_responsable" + i + "]").val());
      var observaciones = ($("input[name=observaciones" + i + "]").val());
    
    item={};

    if(fecha !== ''
      && producto_derivado !== ''
      && tamano !== ''
      && entra !== ''
      && sale !== ''
      && motivo_de_salida !== ''
      && total !== ''
      && existencia !== ''
      && programa !== ''
      && responsable !== ''
      && observaciones !== ''

      )
    {
      item["fecha"] = fecha;
      item["producto_derivado"] = producto_derivado;
      item["tamano"] = tamano;
      item["entra"] = entra;
      item["sale"] = sale;
      item["motivo_de_salida"] = motivo_de_salida;
      item["total"] = total;
      item["existencia"] = existencia;
      item["programa"] = programa;
      item["responsable"] = responsable;
      item["observaciones"] = observaciones;
          
      item["cava"] = {{$codigo_cava}};
      vectorDeFlujo.push(item);
    }
}
console.log(vectorDeFlujo);
       aInfo = JSON.stringify(vectorDeFlujo);
       var identificacion = aInfo;
       var cadenaFormulario = "&data=" +identificacion;
       $.ajax({
               data: cadenaFormulario,
               dataType: "html",
               type: 'GET',
               url: 'registrarFlujoCavaAJAX',
               processData: false,
               contentType: false,
               success:function(r){

                alert("Se resgistraron los flujos de cava correctamente");
               }


            });


});
  
});


</script>
@endsection