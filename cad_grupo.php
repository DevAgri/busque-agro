<!DOCTYPE html>
<?php
include 'header_php.php';

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
        <?php        include 'header.php';?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h3>
                        Cadastro de Novo Grupo de Compra
                    </h3>
                </div>
            </div>
        </div>
        <form method="POST" action="" name="cad_new_group">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <label>Escolha o Produto Desejado:</label>
                   
                <select class="form-control" name="produto">
                       <?php
                       $sql_pro = mysql_query("SELECT * FROM produtos");
                        while ($res_pro = mysql_fetch_assoc($sql_pro)){
                            echo '<option value="'.$res_pro[id_pro].'">'.$res_pro[marca_pro].' - '.$res_pro[modelo_pro].'</option>';

                        }                       
                       ?>
                   </select>
                <br>
            </div>
            <div class="col-xs-12 col-sm-4">
                <label>Quantidade Desejada:</label>
                <input type="number" name="qtde" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <label>
                    Tipo de Pagamento:
                </label>
                <select class="form-control" name="formapgto">
                    <option disabled selected>Escolha a forma de pagamento realizada</option>
                    <option value="À vista">À vista</option>
                    <option value="À prazo">À prazo</option>

                </select>
            </div>
            <div class="col-xs-6">
                <label>Data prevista: </label>
                <input type="date" name="dataprev" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12"><br>
                <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
            </div>
        </div>
        </form>
        <?php
        if(isset($_POST['cadastrar'])){
            
            $idprod = $_POST['produto'];
            $qtde = $_POST['qtde'];
            $formapgto = $_POST['formapgto'];
            $dataprev = $_POST['dataprev'];
            $datacad = date("Y-m-d");
            $hora = date("h:i:s");
            mysql_query("INSERT INTO grupocompra (idprt_grp,
                            qtdeprod_grp,
                            dataprev_grp,
                            tipopgto_grp,
                            idprod_grp,
                            data_grp,
                            hora_grp
                            )
                            VALUES
                            ('$_SESSION[id]', '$qtde', '$dataprev', '$formapgto', '$idprod', '$datacad', '$hora')") or die(mysql_error());
             echo "<script language='javascript'>
                                window.frames['parent'].location.href = 'painel.php?msg=grp'</script>";
            
            
        }
        
        ?>
        
        
    </div>
        
    
  
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>