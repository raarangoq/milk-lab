@extends('layout.principal')

@section('contenido')

<!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->

@include('alerts.request')

<main>

    <article>
        <section>
            <div id="stage" class="stage">

            <a href="listarCava">
              <img src="css/iconos/atras.png">
            </a>


                <form action="editarCava" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 


                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR CAVA</legend>

                       <div class="control" data-reactid=".0.0.3">
                            <input name="id"  type="number" step="0.001"  value={{$cava->id}} required="" data-reactid=".0.0.3.0" class="active bloqueado" readOnly>
                            <label data-reactid=".0.0.3.1">id</label>
                        </div>

                           <div class="control" data-reactid=".0.0.2">

                            <select  name="tipo" data-reactid=".0.0.2.0" class="active">
                           
                              <option>Congelamiento</option>
                              <option>Maduración</option>
                              <option>Producto terminado</option>

                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Tipo de Cava</label>
                        </div>
                        
                        <div class="control" data-reactid=".0.0.3">
                            <input name="temperatura_minima"  type="number" step="0.001"     value={{$cava->temperatura_minima}} required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Temperatura minima</label>
                        </div>
                        <div class="control" data-reactid=".0.0.4">
                            <input name="temperatura_maxima"     type="number" step="0.001" value={{$cava->temperatura_maxima}} required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Temperatura maxima</label>
                        </div>

                        <div class="control" data-reactid=".0.0.7">
                            <select id="iden_uso" name="en_uso" data-reactid=".0.0.7.0" class="active"> 
                               
@if ($cava->en_uso === 1)
   <option value="1">SI</option>
   <option value="0">NO</option>
@else
    <option value="0">NO</option>
     <option value="1">SI</option> 
@endif                  

                            </select>
                            <label data-reactid=".0.0.7.1">En uso</label>
                        </div>  
                    

                        <input type="submit" value="editar cava" data-reactid=".0.0.5">


                    </fieldset>
                </form>

            </div>
        </section>
    </article>
</main>
<!-- FIN Contenido -->


@endsection



@section('ajaxEditar')


<script>

$(document).ready(function(){

    $('#idCorreoBuscar').on('change',function(e){
   
    var correo = $('#idCorreoBuscar').val();

        $.get('/ajax?correo=' + correo,function(data){  


          $('#idcorreo').val(data[0]['correo']);
          $('#idnombre').val(data[0]['nombre']);
          $('#idcedula').val(data[0]['cedula']);
          $('#idrol').val(data[0]['rol']);


          if((data[0]['habilitado'])==1){
          $('#idhabilitado').val('Habilitado');
          }else{
          $('#idhabilitado').val('Inhabilitado');
          }     


         });

     });
            
});

</script>

@endsection

