<?php
    require_once("menu.php");

    session_start();
    
    if (isset($_SESSION["cadastros"])){
     
        $cadastros = $_SESSION["cadastros"];
        
        foreach ($cadastros as $pessoa){
            if($pessoa != null){
              echo "$pessoa <br/>";
            }
        }
    }
    else{
        echo " Não existem pessoas cadastradas";
    }

?>
