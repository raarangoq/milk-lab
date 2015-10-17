<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>HOME</title>




        <style>
            @import url(css/2.ESTRUCTURA_PRINCIPAL/2.NAV/css/nav_reset.css);
            @import url(css/2.ESTRUCTURA_PRINCIPAL/2.NAV/css/nav_style.css);

            @import url(css/2.ESTRUCTURA_PRINCIPAL/3.ASIDE/css/aside_style.css);

            @import url(css/2.ESTRUCTURA_PRINCIPAL/4.SECTION/css/section_style.css);
            /*@import url(4.SECTION/css/reset.css);*/

            @import url(css/2.ESTRUCTURA_PRINCIPAL/5.FOOTER/css/footer_style.css);
            body {
                font-size: 19px;
                line-height: 1.3em;

                background-image: url(
                    imagenes/fondo_principal.jpg
                    );
                color: #94bfdc;
            }

        </style> 

        <script src='css/2.ESTRUCTURA_PRINCIPAL/3.ASIDE/js/jquery.min.js'></script>

        <script src="css/2.ESTRUCTURA_PRINCIPAL/3.ASIDE/js/index.js"></script>
    </head>


    <body>



        <!-- Cabecera -->
        <header>
            <nav>
                <h1><a href="#"><span>Milk - Lab</span></a></h1>
                <ul>
                    <li class="clase1 clase2 selected"><a href="#"><span>Home</span></a></li>
                    <li class=""><a href="#"><span>Acerca de nosotros</span></a></li>
                    <li class=""><a href="#"><span>Servicios</span></a></li>
                    <li class=""><a href="#"><span>Productos</span></a></li>
                    <li class=""><a href="#"><span>Docencia</span></a></li>
                </ul>
            </nav>
        </header>





        <!--ASIDE Contenido relacionado-->
        <aside>
            <ul id="accordion" class="accordion">

                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/usuario.png"></i>USUARIOS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Editar MI Perfil</a></li>
                        <li><a href="registrarUsuario">Registrar Usuario</a></li>
                        <li><a href="editarUsuario">Editar Usuario</a></li>
                        <li><a href="#">Inhabilitar Usuario</a></li>
                    </ul>
                </li>

                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/vaca3.png"></i>LECHE<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Registrar LECHE</a></li>
                        <li><a href="#">Analisis de LECHE</a></li>
                    </ul>
                </li>



                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/queso.png"></i>PRODUCTOS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Registrar Lote de PRODUCTO</a></li>
                        <li><a href="#">Analisis de Lote de PRODUCTO</a></li>
                    </ul>
                </li>

                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/materias_primas.png"></i>MATERIAS PRIMAS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Registrar Materia Prima</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>



                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/cava.png"></i>CAVAS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                         <li><a href="registrarCava">Registrar Cava</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>

                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/bodega.png"></i>BODEGAS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="registrarBodega">Registrar Bodega</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>

                <li >
                    <div class="link"><i class="fa fa-code"></i>Desarrollo front-end<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Javascript</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Frameworks javascript</a></li>
                    </ul>
                </li>

            </ul>

           
        </aside>


        <!-----------CONTENIDO------------------->

        @yield('contenido')

        
        <!-------FIN DE CONTENIDO---------------->

        <footer>
            <ul class="social-ul">
                <li class="social" title="Home"><a href="">&#8962;</a></li>
                <li class="social" title="Forums"><a href="">&#57349;</a></li>
                <li class="social" title="Store"><a href="">&#59197;</a></li>
                <li class="social" title="Support"><a href="">&#10067;</a></li>
                <li class="social" title="Twitter"><a href="">&#62217;</a></li>

            </ul>
        </footer>


    </body>
</html>