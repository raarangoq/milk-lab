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
        <script src="libs/jQuery/jquery-1.9.1.js"></script>

        @yield('ajaxEditar')
        
    </head>
    


    <body>

        <!-- Cabecera -->
        <header>
            <nav>
                <h1><a href="#"><span>Milk - Lab</span></a></h1>
                <ul>
                    <li class=""><a href="home"><span>Home</span></a></li>
                    <li class=""><a href="#"><span>Acerca de nosotros</span></a></li>
                    <li class=""><a href="#"><span>Servicios</span></a></li>
                    <li class=""><a href="#"><span>Productos</span></a></li>
                    <li class=""><a href="#"><span>Docencia</span></a></li>
                </ul>
            </nav>
        </header>


        <!--ASIDE BARRA IZQUIERDA DE MENU-->
        <aside>

            <ul id="accordion" class="accordion">

                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/usuario.png"></i>USUARIOS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="editarPerfil">Editar mi Perfil</a></li>
                        <li><a href="registrarUsuario">Registrar Usuario</a></li>
                        <li><a href="listarUsuario">Listar Usuarios</a></li>
                    </ul>
                </li>

                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/vaca4.png"></i>LECHE<i class="fa fa-chevron-down"></i></div>
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
                        <li><a href="registrarMateriaPrima">Registrar Materia Prima</a></li>
                        <li><a href="listarMateriaPrima">Listar Materias Primas</a></li>
                        
                    </ul>
                </li>

                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/programas.png"></i>PROGRAMAS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="registrarPrograma">Registrar Programa</a></li>
                        <li><a href="listarPrograma">Listar Programas</a></li>
                        
                        
                    </ul>
                </li>


                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/cava.png"></i>CAVAS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="registrarCava">Registrar Cava</a></li>
                        <li><a href="listarCava">Listar Cavas</a></li>
                        
                    </ul>
                </li>

                <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/bodega.png"></i>BODEGAS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="registrarBodega">Registrar Bodega</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>

                    <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/analisis.png"></i>PRUEBAS<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Prueba de producto</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>

                </li>

                    <li>
                    <div class="link"><i class="fa fa"><img src="css/iconos/proveedores.png"></i>PROVEEDORES<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="registrarProveedor">Registrar Proveedor</a></li>
                        <li><a href="listarProveedor">Listar Proveedores</a></li>
                    </ul>
                </li>

                
            </ul>

            <a href="logout">
                    <input type="button" value="CERRAR SESSION (logout)" class="botonCerrarSession" />
                 </a>


         
        </aside>

       



        <!--CONTENIDO-->

        @yield('contenido')



        
        <!---FIN DE CONTENIDO-->

         @yield('footer')




    </body>
</html>