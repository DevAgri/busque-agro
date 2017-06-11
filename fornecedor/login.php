<!DOCTYPE html>
<html>
    <head>
       <?php include 'bootstrap.php' ;?>
        <title></title>
    </head>
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
        <div class="col-xs-12">
            <div class="form-login">
                
                <form action="aut.php" method="POST" name="usuario" autocomplete="off" accept-charset="UTF-8">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-login">
                                <img src="../img/devtask.png" class="img-responsive" alt="Busque Agro"><br>
                                
                                <form class="form2" action="aut.php" method="POST" name="usuario" autocomplete="off" accept-charset="UTF-8" >                                    
                                    
                                    <div class="form-group" id="juridica" > 
                                        <input type="text" name="pjuridica" onkeyup="cnpj(this);" id="inputEmail" class="form-control input-lg" maxlength="18" placeholder="CNPJ">                         
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

                                </form>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" align="center">
            <a href="cad_fornecedor.php">Cadastrar fornecedor</a>
        </div>
    </div>
</div>

<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</html>
