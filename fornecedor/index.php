<?php
include 'header_php.php';

$sql = mysql_query("SELECT * FROM fornecedor WHERE id_for = '$_SESSION[id]'");
$res = mysql_fetch_assoc($sql);
$empresa = $res['razao_for'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'bootstrap.php' ;?>

<link rel="shortcut icon" href="ico.png" type="image/png" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include 'title.php'; ?></title>
</head>

    <?php include 'header.php'; ?>
        
    <?php include 'recados.php'; ?>   
        
    <?php include 'footer.php'; ?>    
</body>
</html>