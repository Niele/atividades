<html>
    <head>
        <title>Cadastro de produto</title>           
    </head>
    <body>
        
        <?php
            require_once("menu.php");
        ?>
        <form action="cadastrar.php" method="post">
            <?php require_once("campos_pessoa.php"); ?>
            <input type="submit" value="Enviar" />
               
        </form>
         
        
    </body>
</html>
