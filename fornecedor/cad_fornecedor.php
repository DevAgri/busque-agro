<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="shortcut icon" href="ico.png" type="image/png" />
<?php include 'bootstrap.php' ;?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include 'title.php'; ?></title>
    <script>
function cnpj(c){
  if(c.value.length ==2){
        c.value += '.';
  }
  if(c.value.length==6)
      c.value += '.';

if(c.value.length==10)
      c.value += '/';  

if(c.value.length==15)
      c.value += '-'; 
}

function telConta(c){
  if(c.value.length ==3){
        c.value += ')';
  }
  if(c.value.length==8)
      c.value += '-';
}
function tel1Conta(c){
  if(c.value.length ==0){
        c.value += '(';
  }
  
}
</script>
</head>

    <body >
    
    <div class="container">
       <?php
       if(isset($_GET['msg'])== 'cnpj'){
           ?>
        <div class="row">
                        <div class="col-xs-12">
                            <div class="alert alert-danger">
                                Esta emmpresa já possui registro!
                            </div>
                        </div>
                    </div>
        
        <?php
       }
       
       ?>
      <div class="row">
        <div class="col-sm-10 col-xs-12">
            <div class="page-header">
                <h1 class="">Cadastro de Fornecedor</h1>
            </div>       		
        </div>
         <div class="col-sm-2 col-xs-12">
             <div class="page-header" align="right">
                 <img src="../img/devtask.png" style="height: 50px" class="img-responsive" >    
             </div>
         </div>
      </div>
      
    
  
        <form class="form-group" name="cad_fornecedor" method="POST" action="">
    <div class="form-group"> 
        <label>Razão Social</label>
        <input class="form-control" placeholder="Razão Social da Empresa" type="text" required name="razao"> </div>
    <div class="form-group" onkeyup="cnpj(this);"> 
        <label>CNPJ</label>
      <input type="text" name="pjuridica" onkeyup="cnpj(this);" id="inputEmail" class="form-control" maxlength="18" placeholder="CNPJ" required>
    </div>
  
    <div class="form-group"> 
        <label>Cidade</label>
        <input class="form-control" placeholder="Digite sua Cidade" type="text" required name="cidade"> </div>
    <div class="form-group"> 
        <label>Senha</label>
        <input class="form-control" placeholder="Senha para acesso" maxlength="16" type="password" required name="senha"> </div>
 
    <div class="form-group"> 
        <label>Telefone</label>
      <input id="tel" name="tel" class="form-control" placeholder="(___)xxxxx-xxxx" type="text" required onfocus="tel1Conta(this)" onkeydown="tel1Conta(this)" onclick="tel1Conta(this)" onkeyup="telConta(this);"  maxlength="14">
    </div>
    <div class="form-group"> 
        <label>Email</label>
        <input class="form-control" placeholder="Digite seu E-Mail" type="email" name="email" required> </div>
      <button type="submit" class="btn btn-primary" value="cadastrar" name="cadastrar">Cadastrar</button>
  </form>
       
  
        <?php 
        if(isset($_POST['cadastrar'])){
            
            ini_set('default_charset','UTF-8');
                include 'conexao.php';
            $razao = mb_strtoupper($_POST['razao'], 'UTF-8');
            $cnpj = mb_strtoupper($_POST['pjuridica'], 'UTF-8');
            $cidade = mb_strtoupper($_POST['cidade'], 'UTF-8');
            $senha2 = $_POST['senha'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            
            $sql_ver = mysql_query("SELECT cnpj_for FROM fornecedor WHERE cnpj_for = '$cnpj'");
            $row_ver = mysql_num_rows($sql_ver);
            
            
            if($row_ver >= 1){
                
                echo "<script language='javascript'>
                                window.frames['parent'].location.href = '?msg=cnpj'</script>";
               
            }else{
            
                
                $data = date('Y-m-d');
                mysql_query("INSERT INTO fornecedor (razao_for, cnpj_for, cidade_for, senha_for, tel_for,  email_for, data_for)
                            VALUES
                            ('$razao', '$cnpj', '$cidade', '$senha2', '$tel', '$email', '$data')")or die(mysql_error());
                        echo "<script language='javascript'>
                                window.frames['parent'].location.href = 'index.php?msg=success'</script>";
            }
             
             
            
            
        }
        
        
        
        ?>
        
  </div>       
</body>
</html>