@extends('layout.principal')

@section('contenido')

@include('alerts.request')

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
      <div class="cell">
        
      </div>
    </div>




   



        <input class="inputRegistrar" type="submit" value="registrar cava" data-reactid=".0.0.5">

             </div>

             </div>


<!-- FIN FLOJO DE CAVA -->

@endsection


