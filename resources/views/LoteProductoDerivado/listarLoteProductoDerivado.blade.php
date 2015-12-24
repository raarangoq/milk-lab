@extends('layout.principal')

@section('contenido')

@include('alerts.request')


<div class="wrapper">
  
        <div class="table">

              <div class="row header blue">
                <div class="cell">                  
                  FILTRAR LOTE DE PRODUCTO DERIVADO
                </div>
              </div>

              <div class="row">

                  <div class="cell">
                    Nombre de lote
                  </div>
                <div class="cell">
                 <input placeholder="filtrar nombre" class="active" type="text" name="id">
                </div>

                   <div class="cell">
                    Fecha
                  </div>
                <div class="cell">
                 <input placeholder="filtrar nombre" class="active" type="date" name="id">
                </div>

             

              </div>

              <div class="row">

                <div class="cell">
                 Producto derivado
                </div>
                <div class="cell">
                 <select name="tipo" data-reactid=".0.0.´6.0" class="active">
                     <option>--seleccionar producto derivado--</option>
                                        
                </select>
                </div>

                  <div class="cell">
                    Cava :
                  </div>
                  <div class="cell">
                   <select id="" name="tipo" data-reactid=".0.0.7.0" class="active"> 
                                           
                      <option>-seleccionar cava-</option>
                     
                    </select>
                  </div>                    
                 
              </div>

              <div class="row">
                  <div class="cell">
                   Tamaño :
                  </div>
                  <div class="cell">
                   <select id="" name="tipo_de_tamano" data-reactid=".0.0.7.0" class="active">                                            
                      <option>-seleccionar tamaño-</option>
                      
                    </select>
                  </div>

                  <div class="cell">
                   Responsable :
                  </div>
                  <div class="cell">
                   <select id="" name="responsable" data-reactid=".0.0.7.0" class="active">                                            
                      <option>-seleccionar responsable-</option>
                      
                    </select>
                  </div>

                  
              </div>
      <div class="row">
            <div class="cell">
               <input value="filtrar busqueda" class="active" type="submit">
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
        Numero de lote
      </div>
      <div class="cell">
        Producto derivado
      </div>
      <div class="cell">
         Tamaño         
      </div>
      <div class="cell">
        Fecha
      </div>
      <div class="cell">
        Cava
      </div>
      <div class="cell">
       Cantidad
      </div>
      
      <div class="cell">
        Total 
      </div>
      <div class="cell">
        Existencia        
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
      Eliminar        
      </div>
      


    </div>
  




<div>
  <input class="inputRegistrar" type="submit" value="registrar producto derivado " data-reactid=".0.0.5">
</div>       
    


             </div>


             </div>
     



<!-- FIN Contenido -->

@endsection

@section('ajaxEditar')


<script>

$(document).ready(function(){

$(".inputEditar").click(function(e){
 var id = e.target.id;
//alert(id);

document.location.href = "editarProductoDerivado?id=" + id;



});

$(".inputRegistrar").click(function(e){
 var id = e.target.id;
//alert(id);

document.location.href = "registrarProductoDerivado?id=" + id;

});

$(".inputRegistrarLote").click(function(e){
 var id = e.target.id;
//alert(id);

document.location.href = "registrarLoteProductoDerivado?id=" + id;

});


});

</script>

@endsection
