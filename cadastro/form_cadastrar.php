<html>
    <head>
        <title>Cadastro de pessoas</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="cadastrar.php" method="post">
            <input type="text" name="nome" />
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
