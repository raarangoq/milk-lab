@extends('layout.principal')

@section('contenido')

@include('alerts.request')

<a href="listarCava">
    <img src="css/iconos/atras.png">
</a>

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
            </div><!--  listar tipos de cavas que este en uso -->
		        <div class="cell">
                <select id="idtipo" name="tipo" data-reactid=".0.0.2.0" class="active">
                  <option>Congelamiento</option>
                  <option>Maduración</option>
                  <option>Producto terminado</option>
                </select>
                            
            </div>
                   
         </div>

         <div class="row">
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
</div>

<!-- REGISTRAR FLUJOS DE CAVAS-->
<div class="wrapper">
  
  <div class="table">

    <div class="row header blue">
      <div class="cell">
        *Fecha
      </div>
      <div class="cell">
        *Producto derivado
      </div>
      <div clas="cell">
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
      <div class="cell">
        <input type="date" name="fecha0">
      </div>
      <div class="cell" align="center">
        <select name="producto_derivado0" id="idproducto_derivado" class="active">
          <option ></option>
         <!-- @foreach($productosDerivados as $productoDerivado)
          <option value={{$productoDerivado->nombre}}>
            {{$productoDerivado->nombre}}
          </option>
          @endforeach -->
        </select>
      </div>
      <div class="cell">
        
      </div>
      
    </div>



  </div>
</div>


         
       
@endsection
          
             

  

      
