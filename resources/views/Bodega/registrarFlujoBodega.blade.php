@extends('layout.principal')

@section('contenido')


@include('alerts.request')
          

<div class="wrapper"> 
  
    <div class="table">

      <div class="row header blue">
        <div class="cell">
        REGISTRAR FLUJO DE BODEGA
        </div>

      </div>

      <div class="row">

          <div class="cell">
       Tipo
        </div>
      <div class="cell">
       <select name="tipo" data-reactid=".0.0.´6.0" class="active">
                                <option>--seleccionar --</option>
                              <option>Reactivo</option>
                              <option>Materia prima</option>
                            
          </select>
      </div>
       </div>

       <div class="row">

        <div class="cell">
       Codigo
        </div>
      <div class="cell">
           <select name="tipo" data-reactid=".0.0.´6.0" class="active">
                                <option>--seleccionar --</option>

                                 @foreach($bodegas as $bodega)
                                <option> 
                                   <div class="cell" align="center">
                                       {{$bodega->codigo}}
                                   </div>
                                </option>
                                 @endforeach
                            
          </select>
      </div>

    </div>

     

   

      <div class="row">
        
      

      <div class="cell">
       <input value="filtrar" class="active" type="submit">
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
        Materia prima
      </div>

       <div class="control" data-reactid=".0.0.3">
       <input name="fecha"  type="date" required="" data-reactid=".0.0.3.0" class="active">
           <label data-reactid=".0.0.3.1">* Fecha</label>
                        </div>

      <div class="cell">
        Entrada
      </div>
      
      <div class="cell">
        Salida
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
    </div>
       
      


      

      
 
     </div>
     
    </div>

    
     </div>

            
          

<!-- FIN Contenido -->

@endsection




