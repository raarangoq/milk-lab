@extends('layout.principal')

@section('contenido')
<!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->

@if(Session::has('success'))
    
<div class="alert alert-success">
    
{{Session::get("success")}}
</div>


@endif

<main>

    <article>
        <section>
            <div id="stage" class="stage">

            <a href="">
              <img src="css/iconos/atras.png">
            </a>


                <form action="editarCava" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 


                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR FLUJO DE BODEGA</legend>

                           <div class="control" data-reactid=".0.0.2">

                            <select  name="materia_prima" data-reactid=".0.0.2.0" class="active">
                              <option>materia prima</option>

                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Materia Prima</label>
                        </div>


                       <div class="control" data-reactid=".0.0.3">
                            <input name="id"  type="date" value= required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Fecha</label>
                        </div>

                        
                        <div class="control" data-reactid=".0.0.3">
                            <input name="entra"  type="number" value= required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Entra</label>
                        </div>
                        <div class="control" data-reactid=".0.0.4">
                            <input name="sale" type="number" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Sale</label>
                        </div>

                        <div class="control" data-reactid=".0.0.2">

                            <select  name="motivo_de_salida" data-reactid=".0.0.2.0" class="active">
                              <option>motivo_de_salida</option>

                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Motivo de salida</label>
                        </div>

                        <div class="control" data-reactid=".0.0.4">
                            <input name="total" type="number" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Total</label>
                        </div>

                        <div class="control" data-reactid=".0.0.4">
                            <input name="existencia" type="number" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">* Existencia</label>
                        </div>

                         <div class="control" data-reactid=".0.0.1">
                           <textarea  name="observaciones" rows="10" data-reactid=".0.0.1.0" class="active"></textarea>
                            <label data-reactid=".0.0.1.1">Observaciones:</label>
                        </div>

                         <div class="control" data-reactid=".0.0.2">

                            <select  name="programa" data-reactid=".0.0.2.0" class="active">
                              <option>programa</option>

                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Programa</label>
                        </div>

                         <div class="control" data-reactid=".0.0.2">

                            <select  name="usuario_responsable" data-reactid=".0.0.2.0" class="active">
                              <option>responsable</option>

                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Responsable</label>
                        </div>

                         <div class="control" data-reactid=".0.0.2">

                            <select  name="bodega" data-reactid=".0.0.2.0" class="active">
                              <option>bodega</option>

                            </select>
                            
                            <label data-reactid=".0.0.2.1">* Bodega</label>
                        </div>


                    

                        <input type="submit" value="editar flujo de bodega" data-reactid=".0.0.5">

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
