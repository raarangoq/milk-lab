@extends('layout.principal')

@section('footer')


<style>
    @import url(css/home.css);
</style>

<div class='content'>
  <div class='visible'>
    <p class="hello">
      Bienvenido
    </p>
    <ul class="listaHello">
      <li class="itemListaHello">{{$user->rol}}</li>
      <li class="itemListaHello">{{$user->nombre}}</li>
      <li class="itemListaHello">{{$user->correo}}</li>
    </ul>
  </div>
</div>



        <footer>
            <ul class="social-ul">
                <li class="social" title="Home"><a href="">&#8962;</a></li>
                <li class="social" title="Forums"><a href="">&#57349;</a></li>
                <li class="social" title="Store"><a href="">&#59197;</a></li>
                <li class="social" title="Support"><a href="">&#10067;</a></li>
                <li class="social" title="Twitter"><a href="">&#62217;</a></li>

            </ul>
        </footer>


@endsection