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

  
})


</script>
@endsection