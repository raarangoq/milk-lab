<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
        
        <style>
            @import url(css/1.LOGIN/login_style.css);
        </style>

    </head>

    <body>
        <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div>Milk     <span>Lab</span></div>
        </div>
        <br>
        <div class="login">

            <form action="login" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="text" placeholder="correo" name="correo"><br>
                <input type="password" placeholder="password" name="password"><br>
                <input type="submit" value="ENTRAR">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>

    </body>
</html>
