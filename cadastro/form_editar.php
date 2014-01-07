<html>
    <head>
        <title>Cadastro de pessoas</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="Editar.php" method="post">
            <label>Digite o código da pessoa para Editar:</label>
            <br/>
            <input type="text" name="id"/>
            <br/>
            <label>Digite o novo nome da pessoa:</label>
            <br/>
            <input type="text" name="nome"/>
            </br>
            <input type="submit" value="Editar" />
        </form>
    </body>
</html>

<?php
    require_once("menu.php");

    session_start();
    
    if (isset($_SESSION["cadastros"])){
     
        $cadastros = $_SESSION["cadastros"];
        
        foreach ($cadastros as $id => $pessoa){
            if ($pessoa !=null){
                echo " $id => $pessoa <br/>";
            }
        }
    }
    else{
        echo "Não existem pessoas cadastradas";
    }

?>
