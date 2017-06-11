<!DOCTYPE html>
<?php include 'header_php.php'; ?>
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
        <?php include 'header.php';?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12" align="right">
                    <a href="cad_grupo.php">
                        Cadastrar Novo Grupo
                    </a><br><br><br>                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-success">
                        <div class="panel panel-heading">
                            Grupos em Atividade
                        </div>
                        
                            <table class="table table-hover">
                                <thead>
                                    <tr class="active">
                                        <th>
                                            Marca/Modelo
                                        </th>
                                        <th>
                                            Tipo
                                        </th>
                                        <th>
                                            Qtde.
                                        </th>
                                        <th>
                                            Data Prevista
                                        </th>
                                        <th>
                                            Tipo Pgto.
                                        </th>
                                        <th>
                                            Qtde de participantes
                                        </th>
                                        <th>
                                            
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysql_query("SELECT * FROM grupocompra ORDER BY dataprev_grp DESC")or die(mysql_error());
                                    $row = mysql_num_rows($sql);
                                    
                                    
                                    
                                    while ($res = mysql_fetch_assoc($sql)){
                                        $data_hoje = date("Y-m-d");
                                        $sql_part = mysql_query("SELECT id_grp FROM grupocompra WHERE idprod_grp = '$res[idprod_grp]' AND dataprev_grp > $data_hoje ");
                                        $row_part = mysql_num_rows($sql_part);
                                        
                                        $sql_qtde = mysql_query("SELECT SUM(qtdeprod_grp) FROM grupocompra WHERE idprod_grp = '$res[idprod_grp]' AND dataprev_grp > '$data_hoje' ");
                                        $res_qtde = mysql_fetch_array($sql_qtde);
                                        $qtdetotal = $res_qtde[0];
                                                
                                        $dataprev = implode("/",array_reverse(explode("-", $res['dataprev_grp'])));
                                        $sql_prod = mysql_query("SELECT * FROM produtos WHERE id_pro = '$res[idprod_grp]'");
                                        $res_prod = mysql_fetch_assoc($sql_prod);
                                        
                                        $sql_tipo = mysql_query("SELECT nome_tip FROM tipo_produto WHERE id_tip = '$res_prod[tipo_pro]'");
                                        $res_tipo = mysql_fetch_assoc($sql_tipo);
                                        $tipo = $res_tipo['nome_tip'];
                                        
                                        echo '<tr>
                                                <td>
                                                '.$res_prod['marca_pro'].'/'.$res_prod['modelo_pro'].'
                                                </td>
                                                <td>
                                                '.$tipo.' 
                                                </td>
                                                <td>
                                                '.$qtdetotal.' 
                                                </td>
                                                <td>
                                                '.$dataprev.' 
                                                </td>
                                                <td>
                                                '.$res[tipopgto_grp].' 
                                                </td>
                                                <td>
                                                '.$row_part.' 
                                                </td>
                                                <td>
                                                    <a href="">
                                                    Participar
                                                    </a>
                                                </td>
                                             </tr>';
                                        
                                    }
                                    
                                    ?>
                                </tbody>
                            </table>
                        
                    </div>
                </div>
            </div>           
        </div>
           
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>