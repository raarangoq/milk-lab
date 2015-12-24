<!DOCTYPE html>

@if(count($errors) > 0)
<script>
    alert("Correo y/o Contraseña incorrecta");
</script>
@endif

        <style>
            @import url(css/1.LOGIN/login_style.css);
        </style>


    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>

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

            </form>
        </div>

    </body>

