@extends('layout.principal')

@section('contenido')

<main>
    <article>
        <section>
            <div id="stage" class="stage">
                <form action="editarBodega" method="post" data-reactid=".0">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">EDITAR BODEGA</legend>

                        <div class="control" data-reactid=".0.0.3.0">
                            <input name="temperatura_maxima "  type="number" id="name" placeholder="temperatura_maxima" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">* Codigo </label>
                       </div>                   

                        <div class="control" data-reactid=".0.0.1">

                            <select name"tipo" data-reactid=".0.0.1.0" class="active">
                             
                             <option>{{$Bodega->tipo}}</option>
                              <option>Reactivo</option>
                              <option>Materia prima</option>

                            </select>
                            
                            <label data-reactid=".0.0.1.1">* Tipo de Bodega</label>
                        </div>

                    
                       
                        <div class="control" data-reactid=".0.0.1">

                            <select id="iden_uso" name"en_uso" data-reactid=".0.0.1.0" class="active">
                            
                            @if ($bodega->en_uso === 1)
                               <option value="1">SI</option>
                               <option value="0">NO</option>
                            @else
                                <option value="0">NO</option>
                                 <option value="1">SI</option> 
                            @endif    
                                                        

                            </select>
                            
                            <label data-reactid=".0.0.1.1">* En uso</label>
                        </div>
                                        

                        <input type="submit" value="Editar bodega" data-reactid=".0.0.6">

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






