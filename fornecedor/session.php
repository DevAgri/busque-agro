<?php
session_start();

function session(){
    
    
if(!isset($_SESSION["cnpj"]) and !isset($_SESSION["senha"])){
       header("Location: login.php");
    
    exit;
}

}

?>
