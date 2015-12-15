<style>
    @import url(css/3.TABLAS/css/style.css);
    @import url(css/4.MENSAJES/style.css);
</style>

@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible mensajeRojo" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">              <span aria-hidden="true">&times;</span>

    </button>
    <ul>
        @foreach($errors->all() as $error)
        <li>{!!$error!!}</li>
        @endforeach
    </ul>

</div>

@elseif(Session::has('success'))

<div class="alert alert-success mensajeVerde">

    {{Session::get("success")}}
</div>



@endif

