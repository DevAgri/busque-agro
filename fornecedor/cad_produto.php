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
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
                <h1 class="">Cadastro de Produto</h1>
            </div>       		
        </div>
        
      </div>
  
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <form class="form-group" action="" method="POST" name="cad_produto" enctype="multipart/form-data" >
            <div class="form-group"> 
                <label>Marca</label>
                <input type="text" name="marca" class="form-control" placeholder="Digite a marca" required> 
            </div>
            <div class="form-group"> 
                <label>Modelo</label>
                <input type="text" name="modelo" class="form-control" placeholder="Digito o modelo" required> 
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control" name="tipo" required>
                    <option value="" disabled selected>Escolha o Tipo do Produto</option>
                    <option value="1">Inseticida</option>
                    <option value="2">Fungicida</option>
                    <option value="3">Herbicida</option>
                    <option value="4">Fertilizante</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Descrição</label>
                <textarea class="form-control" id="descricao" rows="3" name="desc" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Bula</label>
                <input type="file" class="form-control-file" name="bula">
                 <span class="help-block">*Serão aceitos somente arquivos em formato ".pdf"</span>   
            </div>
            <div class="form-group">
               
                    <label>Preço Médio</label>                    
                    <input type="text" name="preco" placeholder="Valor unitário" required class="form-control" onkeyup="moeda(this);" min="0" ></input>
            
            </div>
            <div class="form-group">
                
                    <label>Divulgar preço?</label>                    
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default btnjs">
                            <input type="radio" name="divulga" id="rdGroup1" required>Sim
                        </label>
                        <label class="btn btn-default btnjs">
                            <input type="radio" name="divulga" id="rdGroup2" >Não
                        </label>
                        
                    </div>
                                     
            </div>
            <div class="form-group">
                <label>Foto:</label>
                <input type="file" class="form-control-file" name="foto">
                    <span class="help-block">*Serão aceitos somente arquivos em formato ".jpg"</span>
            </div>
            
                <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
    
  
  <footer class="text-left bg-faded py-4" id="footer">
    <div class="container">
      
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p class="text-muted">© Copyright 2017 Busca Agro</p>
        </div>
      </div>
    </div>
  </footer>
   
        <?php
        if(isset($_POST['cadastrar'])){
            
            $sql_ver = mysql_query("SELECT id_pro FROM produtos WHERE fornecedorid_pro = '$_SESSION[id]' ORDER BY id_pro DESC LIMIT 1");
            $res_ver = mysql_fetch_assoc($sql_ver);
            
            
            
            $n_arq = $res_ver['id_pro']+1;
            
            
            if($_FILES['bula']['name'] != ''){

                //
                $pasta_arq = 'bula/';
                
                
                $arquivo = $_FILES['bula'];
                $caminho_temp = $arquivo['tmp_name'];
                //$nome_org = mb_strtolower(trim($exame['name']));
                $nome_org = $_FILES['bula']['name'];

                
                $tipo_arq = $arquivo['type'];
                $tamanho_arq = $arquivo['size'];
                $caminho_final_bula = $pasta_arq.'emp_bula'.$_SESSION[id].'_arq_'.$n_arq.'.pdf';
                $caminho_final_bula = mb_strtolower($caminho_final_bula, 'UTF-8');

                move_uploaded_file($caminho_temp, $caminho_final_bula);
            }else{
                $caminho_final_bula = '';
            }

            if($_FILES['foto']['name'] != ''){

                ///
                $pasta_arq = 'foto/';
                
                
                $arquivo = $_FILES['foto'];
                $caminho_temp = $arquivo['tmp_name'];
                //$nome_org = mb_strtolower(trim($exame['name']));
                $nome_org = $_FILES['foto']['name'];

                
                $tipo_arq = $arquivo['type'];
                $tamanho_arq = $arquivo['size'];
                $caminho_final_foto = $pasta_arq.'emp_foto'.$_SESSION[id].'_arq_'.$n_arq.'.pdf';
                $caminho_final_foto = mb_strtolower($caminho_final_foto, 'UTF-8');

                move_uploaded_file($caminho_temp, $caminho_final_bula);
            }else{
                $caminho_final_foto = '';
            }
            
            
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $tipo = $_POST['tipo'];
            $desc = $_POST['desc'];
            $preco = $_POST['preco'];
            $divulga = $_POST['divulga'];
            $data_cad = date("Y-m-d");
            mysql_query("INSERT INTO produtos (marca_pro, 
                            fornecedorid_pro,
                            modelo_pro, 
                            tipo_pro,
                            desc_pro,
                            preco_pro,
                            divulga_pro,
                            bula_pro,
                            foto_pro,
                            data_pro,
                            ativo_pro)
                            VALUES
                            ('$marca', '$_SESSION[id]', '$modelo','$tipo','$desc','$preco','$divulga','$caminho_final_bula','$caminho_final_foto','$data_cad', '1')") or die(mysql_error());
             echo "<script language='javascript'>
                                window.frames['parent'].location.href = 'produtos.php'</script>";
             
        
        }
        ?>
        
        
      <?php include 'footer.php'; ?>   
</body>
</html>