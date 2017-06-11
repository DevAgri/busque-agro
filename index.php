<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Projeto</title>
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
    <body >
        <!-- menu da aplicação-->
        <div class="container">
            <div class="row">
                <div class="col-xs-12" align="right">
                    <a href="login.php">Acesso ao Painel do Produtor</a>
                </div>
            </div>
            <form name="busca" method="POST" action="resultados.php">
            <div class="form-login">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="img/devtask.png" class="img-responsive" alt="Busca Agro"><br>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-12">
                        <input type="text" class="form-control input-lg" name="produto" required placeholder="Insira o produto desejado..." />
                        <input type="text" class="form-control input-sm" name="cidade" required placeholder="Informe a sua cidade" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12" align="center">
                        <button type="submit" class="btn btn-primary btn-md " value="buscar" name="buscar" >
                            <span class="glyphicon glyphicon-ok-sign"></span> Buscar
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>