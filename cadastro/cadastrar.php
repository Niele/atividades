<?php
    require_once("menu.php");

    session_start();
    
    if (!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
    }
    
    $nome = $_REQUEST["nome"];
    
    array_push ($_SESSION["cadastros"], $nome);

    echo "Cadastro efetuado com sucesso!";

?>
