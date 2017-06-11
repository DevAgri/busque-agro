<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
         <!-- adicionar CSS personal -->
        <link href="css/estilo.css" rel="stylesheet" media="screen">
        <style>
        .form-login{
            max-width:350px;
            margin-left: auto;
            margin-right: auto;
            padding:10px;
            border-radius:10px;
            background: #FFF;
        }

        .form-login input{
            margin-bottom: 10px;
        }
    </style>
    </head>
    <script>

    function cpf(c){
  if(c.value.length ==3){
        c.value += '.';
  }
  if(c.value.length==7)
      c.value += '.';

if(c.value.length==11)
      c.value += '-';  
}

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
    <style>
        .form-login{
    max-width:350px;
    margin-left: auto;
    margin-right: auto;
    padding:10px;
    border-radius:10px;
    background: #FFF;
}

.form-login input{
    margin-bottom: 10px;
}
    </style>
    <body >
      
        
<div class="container">
    <div class="row">
        <div class="col-xs-12" align="center">
            <img src="img/devtask.png" class="img-responsive" alt="Busque Agro" width="220px"><br>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-login">
                
                <form action="aut.php" method="POST" name="usuario" autocomplete="off" accept-charset="UTF-8">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-login">
                                
                                <label>Efetue aqui seu login</label>
                                    <div class="form-group" id="juridica" > 
                                        <input type="text" name="pfisica" onkeyup="cpf(this);" id="inputEmail" class="form-control input-lg" maxlength="14" placeholder="CPF">                         
                                    </div> 
                                    <label class="sr-only" for="inputPass">Senha:</label>
                                    <input type="password" id="inputPass" name="senha"  class="form-control input-lg" required  placeholder="Senha" />                   

                                 
                                    <div class="row">
                                    <div class="col-xs-12 text-center">                        
                                        <button type="submit" class="btn btn-primary " value="buscar" name="buscar" >
                                            <span class="glyphicon glyphicon-ok-sign"></span> Entrar
                                        </button>
                                    </div>
                                </div>
                                    

                                
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-login">
                
                <form action="" method="POST" name="usuario" autocomplete="off" accept-charset="UTF-8">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-login">
                                
                                <label>Caso ainda não possua cadastro, efetue aqui seu registro!</label>
                                <form class="form2" action="aut.php" method="POST" name="usuario" autocomplete="off" accept-charset="UTF-8" >                                    
                                    <div class="form-group" id="nome" > 
                                        <input type="text" name="nome" id="inputEmail" class="form-control input-lg" placeholder="Nome Completo">                         
                                    </div> 
                                    <div class="form-group" id="juridica" > 
                                        <input type="text" name="pfisica" onkeyup="cpf(this);" id="inputEmail" class="form-control input-lg" maxlength="18" placeholder="CPF">                       
                                    </div> 
                                    <div class="form-group" id="ie" > 
                                        <input type="text" name="ie" id="inputEmail" class="form-control input-lg" maxlength="18" placeholder="Inscrição Estadual">                       
                                    </div>
                                    <label class="sr-only" for="inputPass">Senha:</label>
                                    <input type="password" id="inputPass" name="senha"  class="form-control input-lg" required  placeholder="Senha" />  
                                    <label class="sr-only" for="inputPass">E-Mail:</label>
                                    <input type="email" id="inputPass" name="email"  class="form-control input-lg" required  placeholder="E-Mail" /> 
                                    <label class="sr-only" for="inputPass">Telefone:</label>
                                    <input id="tel" name="tel" class="form-control input-lg" placeholder="(___)xxxxx-xxxx" type="text" required onfocus="tel1Conta(this)" onkeydown="tel1Conta(this)" onclick="tel1Conta(this)" onkeyup="telConta(this);"  maxlength="14">

                                 
                                    <div class="row">
                                    <div class="col-xs-12 text-center">                        
                                        <button type="submit" class="btn btn-primary " value="cadastrar" name="cadastrar" >
                                            <span class="glyphicon glyphicon-ok-sign"></span> Cadastrar
                                        </button>
                                    </div>
                                </div>
                                    <?php
                                    if(isset($_GET['msg']) == 'success'){
                                    ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="alert alert-success">
                                                Cadastro efetuado com sucesso!
                                            </div>
                                        </div>
                                    
                                        
                                    </div>
                                    
                                    <?php
                                    }
                                    
                                    
                                    ?>

                                
                            </div>
                        </div>
                    </div>

                </form>
                <?php
                if(isset($_POST['cadastrar'])){
                    $nome = mb_strtoupper($_POST['nome'], 'UTF-8');
                    $cpf = $_POST['pfisica'];
                    $ie = $_POST['ie'];
                    $senha = $_POST['senha'];
                    $email = mb_strtolower($_POST['email'], 'UTF-8');
                    $tel = $_POST['tel'];
                    $data_cad = date("Y-m-d");
                    mysql_query("INSERT INTO produtor (nome_prt, 
                            senha_prt,
                            cpf_prt,
                            tel_prt,
                            email_prt,
                            data_prt)
                            VALUES
                            ('$nome', '$senha', '$cpf','$tel','$email', '$data_cad')") or die(mysql_error());
                    echo "<script language='javascript'>
                                window.frames['parent'].location.href = 'aut.php?cpf=$cpf&senha=$senha'</script>";
                    
                    
                }
                


                ?>
            </div>
        </div>
    </div>
    
</div>

<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</html>
