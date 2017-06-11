<?php

include 'conexao.php';

ini_set('default_charset','UTF-8');
$cnpj = $_POST['pjuridica'];

$senha = $_POST['senha'];
$ip = getenv("REMOTE_ADDR");

if($senha == ''){
     //echo "<script language='javascript'>window.frames['self'].location.href = 'login.php?op';</script>";
    $senha = 1;
}

if($cnpj == ''){
     echo "<script language='javascript'>window.frames['self'].location.href = 'login.php?op';</script>";
}else{
    
    $sql = mysql_query("SELECT * FROM fornecedor WHERE cnpj_for = '$cnpj' and senha_for = '$senha'") or die(mysql_error());
    $res = mysql_fetch_assoc($sql); 
    $row = mysql_num_rows($sql);

        if ($row > 0){
            session_start();
            ob_start(); 
           
            $_SESSION['cnpj'] = $cnpj;  
            $_SESSION['senha'] = $senha;
            $_SESSION['id'] = $res['id_for'];
            
            
            


            //$ip2 = explode('.', $ip);
            //if($ip2[0] !== '10'){
            //    mysql_query("INSERT INTO logextranet (codemp_log, data_log, ip_log) VALUES ('$cod',NOW(), '$ip')");
            //}
            echo "<script language='javascript'>window.frames['self'].location.href = 'index.php';</script>";
        }
    
    
    
}