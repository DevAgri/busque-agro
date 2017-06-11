<?php
include 'conexao.php';
$pvr = $_POST['produto'];
session_start();
$sql = mysql_query("SELECT * FROM produtos WHERE marca_pro LIKE '%$pvr%' OR (modelo_pro LIKE '%$pvr%' OR desc_pro LIKE '%$pvr%')");
$row = mysql_num_rows($sql);
 
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
       <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
    <body >
    <?php 
    if(isset($_SESSION['id'])){
         include 'header.php';
         
    }
   
    ?>
        <!-- menu da aplicação-->
        <div class="container">
            <?php 
            if(!isset($_SESSION['id'])){
             ?>
            <div class="row">
                <div class="col-xs-12" align="center">
                    <a href="index.php">
                        <img src="img/devtask.png" class="img img-responsive" alt="Busca Agro" width="120px" >
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
            <div class="row">
                <div class="col-xs-12" align="left">
                    <div class="page-header">
                        <h3>
                            Resultados com a palavra <u>"<?php echo $pvr; ?>"</u>    
                        </h3>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">    </h3>
                        </div>
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Marca</th>   
                                    <th>Modelo</th>
                                    <th>Tipo</th>
                                    <th>Cidade</th>                                    
                                    <th>Data de Compra</th> 
                                    <th>Valor</th>
                                    <th>Fornecedor</th>
                                    <th>Entrar em Contato</th>
                                    <th>Bula</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            while($res = mysql_fetch_assoc($sql)){
                                
                                $sql_compra = mysql_query("SELECT * FROM venda WHERE idproduto_comp = '$res[id_pro]' ORDER BY data_comp DESC");
                                $row_compra = mysql_num_rows($sql_compra);
                                while ($res_compra = mysql_fetch_assoc($sql_compra)){
                                    
                                    $sql_tipo = mysql_query("SELECT nome_tip FROM tipo_produto WHERE id_tip = '$res[tipo_pro]'");
                                    $res_tipo = mysql_fetch_assoc($sql_tipo);
                                    $tipo = $res_tipo['nome_tip'];
                                    
                                    $data = implode("/",array_reverse(explode("-", $res_compra['data_comp'])));
                                    
                                    echo '<tr>
                                            <td>
                                            <img src="img/semfoto.png">
                                            </td>
                                            <td>
                                            '.$res[marca_pro].' 
                                            </td>
                                            <td>
                                            '.$res[modelo_pro].' 
                                            </td>
                                            <td>
                                            '.$tipo.' 
                                            </td>
                                            <td>
                                            '.$res_compra[cidade_comp].' 
                                            </td>
                                            <td>
                                            '.$data.' 
                                            </td>
                                            <td>
                                            R$ '.$res_compra[valor_comp].' 
                                            </td>
                                            <td>
                                            '.$res_compra[fornecedor_comp].' 
                                            </td>
                                            <td>
                                            <a href="#">Enviar Mensagem</a>
                                            </td>
                                            <td>
                                            <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                            </td>
                                          </tr>';
                                 $i++;   
                                }
                            }
                            
                            
                            ?>

                            </tbody>
                        </table>
                        <div class="panel-footer">
                            Resultados: <?php echo $i; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12" align="right">
                    <a href="cad_compra.php?prod=<?php echo $pvr; ?>">Você já comprou este produto? Clique aqui e ajude a comunidade Agro.</a>
                </div>
            </div>
            
        </div>
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
