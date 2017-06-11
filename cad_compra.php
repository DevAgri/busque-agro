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
     <script type="text/javascript">
        //inserir ponto e virgula em valores
        function moeda(z) {
            v = z.value; 
            v=v.replace(/\D/g,"") //permite digitar apenas números 
            v=v.replace(/[0-9]{12}/,"inválido") //limita pra máximo 999.999.999,99 
            v=v.replace(/(\d{1})(\d{8})$/,"$1.$2") //coloca ponto antes dos últimos 8 digitos 
            v=v.replace(/(\d{1})(\d{5})$/,"$1.$2") //coloca ponto antes dos últimos 5 digitos 
            v=v.replace(/(\d{1})(\d{1,2})$/,"$1,$2") //coloca virgula antes dos últimos 2 digitos 
            z.value = v; 
        } 

</script>  
    </head>
    <body >
    <?php include 'header.php'; ?>    
        
        <!-- menu da aplicação-->
        <div class="container">
            <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
                <h1 class="">Cadastro de Compra de Produto</h1>
            </div>       		
        </div>
        
      </div>
            <form method="POST" action="" name="cad_compra">
            <div class="row">
                <div class="col-xs-12">
                 <div class="form-group">
                <label>Escolha o produto</label>
                <select class="form-control" name="produto" required>
                    <option value="" disabled selected></option>
                    <?php
                    include 'conexao.php';
                    $sql_pro = mysql_query("SELECT * FROM produtos");
                    while ($res_pro = mysql_fetch_assoc($sql_pro)){
                        echo '<option value="'.$res_pro[id_pro].'">'.$res_pro[marca_pro].' - '.$res_pro[modelo_pro].'</option>';
                        
                    }
                    ?>
                </select>
                
            </div>
                </div>
                
            </div>              
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <label>Cidade :</label>                    
                    <input type="text" name="cidade" placeholder="Cidade em que realizou a compra" required class="form-control" ></input>

                </div>
                <div class="col-xs-12 col-sm-6">
                    <label>Fornecedor:</label>                    
                    <input type="text" name="fornecedor" placeholder="Fornecedor da compra" required class="form-control" ></input>

                </div>
                
            </div>    
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <label>Custo Unitário:</label>                    
                    <input type="text" name="preco" placeholder="Valor unitário" required class="form-control" onkeyup="moeda(this);" min="0" ></input>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <label>Forma de Pagamento:</label>                    
                    <select class="form-control" name="formapgto">
                        <option disabled selected>Escolha a forma de pagamento realizada</option>
                        <option value="À vista">À vista</option>
                        <option value="À prazo">À prazo</option>
                        
                    </select>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <label>Data da Compra:</label>                    
                    <input type="date" name="data" placeholder="Data da Compra" required class="form-control" ></input>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12"><br>
                    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                </div>
            </div>
                </form>
            <br><br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-success">
                        <div class="panel panel-heading">
                            Histórico de Compras
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
                                            Cidade
                                        </th>
                                        <th>
                                            Data da Compra
                                        </th>
                                        <th>
                                            Valor
                                        </th>
                                        <th>
                                            Fornecedor
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysql_query("SELECT * FROM venda WHERE idprodutor_comp = '$_SESSION[id]' ORDER BY data_comp DESC")or die(mysql_error());
                                    $row = mysql_num_rows($sql);
                                    
                                    while ($res = mysql_fetch_assoc($sql)){
                                        $data = implode("/",array_reverse(explode("-", $res['data_comp'])));
                                        $sql_prod = mysql_query("SELECT * FROM produtos WHERE id_pro = '$res[idproduto_comp]'");
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
                                                '.$res[cidade_comp].' 
                                                </td>
                                                <td>
                                                '.$data.' 
                                                </td>
                                                <td>
                                                R$ '.$res[valor_comp].' 
                                                </td>
                                                <td>
                                                '.$res[fornecedor_comp].' 
                                                </td>
                                             </tr>';
                                        
                                    }
                                    
                                    ?>
                                </tbody>
                            </table>
                        
                    </div>
                </div>
            </div>
            
            <?php
            if(isset($_POST['cadastrar'])){
                $produto = $_POST['produto'];
                $preco = $_POST['preco'];
                $data_comp = $_POST['data'];
                $fornecedor = mb_strtoupper($_POST['fornecedor'], 'UTF-8');
                $formapgto = mb_strtoupper($_POST['formapgto'], 'UTF-8');
                $cidade = mb_strtoupper($_POST['cidade'], 'UTF-8');
                
                
                $data_cad = date("Y-m-d");
            mysql_query("INSERT INTO venda (idproduto_comp,
                            idprodutor_comp,
                            valor_comp,
                            data_comp,
                            cidade_comp,
                            datacad_comp,
                            fornecedor_comp,
                            formapgto_comp)
                            VALUES
                            ('$produto', '$_SESSION[id]', '$preco', '$data_comp', '$cidade', '$data_cad', '$fornecedor', '$formapgto')") or die(mysql_error());
             echo "<script language='javascript'>
                                window.frames['parent'].location.href = 'painel.php?msg=tks'</script>";
                
            }
            
            
            ?>
            
            
        </div>
           
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>