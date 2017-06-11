<?php
session_start();

function session(){
    
    
if(!isset($_SESSION["nome"]) and !isset($_SESSION["senha"])){
       header("Location: login.php");
    
    exit;
}

}

?>
