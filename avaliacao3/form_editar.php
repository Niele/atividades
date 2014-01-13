<html>
    <head>
        <title>Cadastro de produto</title>           
    </head>
    <body>
        
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            Digite o código do produto para editar:<br/><input type="text" name="id" /> </br>
            Digite o novo do produto :<br/><?php require_once("campos_pessoa.php"); ?>
            <input type="submit" value="Editar" />
            
        </form>
                
    </body>
</html>
<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $pessoa){
            if($pessoa != null){
                echo "[$id] =>" . $pessoa["nome"] . "<br/>";
            }
        }
    }
    else{
        echo "Não existem produtos cadastrados";
    }
       
?>

