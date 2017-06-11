<?php

include 'conexao.php';

ini_set('default_charset','UTF-8');
$cpf = $_POST['pfisica'];

$senha2 = $_POST['senha'];
$ip = getenv("REMOTE_ADDR");

if($senha == ''){
     //echo "<script language='javascript'>window.frames['self'].location.href = 'login.php?op';</script>";
    $senha = 1;
}

if($cpf == ''){
     echo "<script language='javascript'>window.frames['self'].location.href = 'login.php';</script>";
}else{
    
    $sql = mysql_query("SELECT * FROM produtor WHERE cpf_prt = '$cpf' and senha_prt = '$senha2'") or die(mysql_error());
    $res = mysql_fetch_assoc($sql); 
    $row = mysql_num_rows($sql);

        if ($row > 0){
            session_start();
            ob_start(); 
           
            $_SESSION['cpf'] = $cpf;  
            $_SESSION['senha'] = $senha2;
            $_SESSION['id'] = $res['id_prt'];
            $_SESSION['nome'] = $res['nome_prt'];
            
            
            


            //$ip2 = explode('.', $ip);
            //if($ip2[0] !== '10'){
            //    mysql_query("INSERT INTO logextranet (codemp_log, data_log, ip_log) VALUES ('$cod',NOW(), '$ip')");
            //}
            echo "<script language='javascript'>window.frames['self'].location.href = 'painel.php';</script>";
        }
    
    
    
}