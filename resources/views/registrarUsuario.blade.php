<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>HOME</title>

        </style>

        <style>
            @import url(css/2.NAV/css/nav_reset.css);
            @import url(css/2.NAV/css/nav_style.css);

            @import url(css/3.ASIDE/css/aside_style.css);

            @import url(css/4.SECTION/css/section_style.css);
            /*@import url(4.SECTION/css/reset.css);*/
            
            @import url(css/5.FOOTER/css/footer_style.css);


        </style> 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="css/3.ASIDE/js/index.js"></script>
    </head>


    <body>



        <!-- Cabecera -->
        <header>
            <nav>
                <h1><a href="home"><span>Milk - Lab</span></a></h1>
                <ul>
                    <li class=""><a href="home"><span>Home</span></a></li>
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
                <li><a href="">Editar MI Perfil</a></li>
                <li><a href="registrarUsuario">Registrar Usuario</a></li>
                <li><a href="">Editar Usuario</a></li>
                <li><a href="">Inhabilitar Usuario</a></li>
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
                <li><a href="#">Registrar Cava</a></li>
                <li><a href="#"></a></li>
            </ul>
        </li>

        <li>
        <div class="link"><i class="fa fa"><img src="css/iconos/bodega.png"></i>BODEGAS<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Registrar Bodega</a></li>
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

        <!-- Iconos -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        </aside>


        <!-- Contenido  xxxxxxxxxxxxxxxxxxxxxxxxxxx -->
        <main>
        <article>
        <section>
            <div id="stage" class="stage">
                <form action="register" method="post" data-reactid=".0">
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <fieldset data-reactid=".0.0">
                        <legend data-reactid=".0.0.0">REGISTRAR USUARIO</legend>

                        <div class="control" data-reactid=".0.0.1">
                            <input name="nombre" type="text" id="nombre" placeholder="nombre:" required="" data-reactid=".0.0.1.0" class="active">
                            <label data-reactid=".0.0.1.1">Nombre de Usuario</label>
                        </div>
                         <!--
                        <select>


                        </select>
                         --> 
                        <div class="control" data-reactid=".0.0.2">

                          
                             <input name="cedula" type="number" id="cedula" placeholder="ceudla:" required="" data-reactid=".0.0.2.0" class="active">
                             
                            <label data-reactid=".0.0.2.1">Cedula</label>
                        </div>

                        <div class="control" data-reactid=".0.0.3">
                            <input name="correo" type="email" id="name" placeholder="em@il / correo de usuario@unal.edu.co" required="" data-reactid=".0.0.3.0" class="active">
                            <label data-reactid=".0.0.3.1">Correo de Usuario</label>
                        </div>

                        <div class="control" data-reactid=".0.0.4">
                            <input name="password" type="password" id="password" placeholder="contraseña de usuario" required="" data-reactid=".0.0.4.0" class="active">
                            <label data-reactid=".0.0.4.1">Contraseña de Usuario</label>
                        </div>
                         <div class="control" data-reactid=".0.0.5">
                            <input name="password2" type="password" id="password2" placeholder="contraseña de usuario" required="" data-reactid=".0.0.5.0" class="active">
                            <label data-reactid=".0.0.5.1">Repetir Contraseña</label>
                        </div>
                        <div class="control" data-reactid=".0.0.6">
                            <select name="rol" data-reactid=".0.0.6.0" class="active"> 
                            <option>Director</option>
                            <option>Tecnico</option>
                            <option>Estudiante</option>
                            <option>otro....</option>                            


                            </select>
                            <label data-reactid=".0.0.6.1">Tipo de Rol</label>
                        </div>                      

                        <input type="submit" value="registrar usuario" data-reactid=".0.0.5">

                    </fieldset>
                </form>
            </div>
</section>
</article>
        </main>
        <!-- FIN Contenido -->

        



        <!-- Pie de pagina -->


    </body>
</html>