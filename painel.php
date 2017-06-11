<?php
include 'header_php.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
         <!-- adicionar CSS personal -->
        <link href="css/estilo.css" rel="stylesheet" media="screen">
      
    </head>
    <?php include 'header.php';?>
    <div class="container">
        
   
    <?php 
    
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'tks'){
        ?>
        <div class="alert alert-success" align="center">
            <b>Obrigado por cadastrar seus dados! Sua ajuda é de grande mais valia a comunidade Agro!</b>

        </div>
    <?php
        }
    }
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'grp'){
        ?>
        <div class="alert alert-success" align="center">
            <b>Obrigado por cadastrar um novo grupo! Sua solicitação já esta diponível!</b>

        </div>
    <?php
    }
    }

    ?>
     </div>
    
        
           
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>