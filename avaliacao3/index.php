<style>
    .Verde{
        color: Green;
    }
    .Rosa{
        color: Pink;
    }
    .Amarelo{
        color: Yellow;
    }
</style>


<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $pessoa){
            $sexo = $pessoa["sexo"];
            $aceito = $pessoa["aceito"];
            $estado = $pessoa["estado"];
            $observacoes = $pessoa["observacoes"];
            if($pessoa != null){
                echo "<dt class='$sexo' >" . $pessoa["nome"] . "</dt>";
                echo "<dd>Cor: " . $sexo . "</dd>";
                echo "<dd>Praso de Entrega: " . $estado . "</dd>";
                echo "<dd>Produto Novo: ";
                
                if($aceito){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
                echo "<dd>Detalhe do Produto: " . $observacoes . "</dd>";
                echo "</dd>";
            }
        }
        echo "</dl>";
        
    }
    else{
        echo "Não existem produtos cadastrados";
    }
    
?>
