<html>
    <head>
        <title>Cadastro de produto</title>           
    </head>
    <body>
        
        <?php
            require_once("menu.php");
        ?>
        
        <form action="remover.php" method="post">
            Digite o código do produto para remover:<br/><input type="text" name="id" /> </br>
            <input type="submit" value="Remover" />
         
               
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
        echo "Não existem produto cadastrados";
    }
        
?>
