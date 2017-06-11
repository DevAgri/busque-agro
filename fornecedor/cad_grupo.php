<!DOCTYPE html>
<?php
//include 'header_php.php';

?>
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
    <body >
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            
            
            <div class="jumbotron">
            <div class="col-xs-12" align="center">
                </div>
                <h3>
                    Compras em grupo.
                </h3>
                <p> 
                   Produto: <select>
                       <optgroup label="produto">
                           <option value="1" selected=""> Item 1</option>
                           <option value="2" > Item 2 </option>
                       </optgroup>
                   </select>
                   Tipo de Pagamento: <select>
                       <optgroup label="tipo_pagto">
                           <option value="1" selected=""> Item 1</option>
                           <option value="2" > Item 2 </option>
                       </optgroup>
                   </select>
                   Data prevista: <input type="date" name="data">
                </p>
            </div>
        </div>
    </div>
  
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>