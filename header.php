<body data-spy="scroll" data-target=".menu-nav" data-offset="80" style="padding-top: 80px">
    <?php
	date_default_timezone_set('Brazil/East');
	//$data = date("H");
	$hr = date("H");  
  
     if($hr >= 12 && $hr<18) {  
          $resposta = "Boa tarde";  
  
     }else if ($hr >= 0 && $hr <12 ){  
          $resposta = "Bom dia";  
  
     }else{  
          $resposta = "Boa noite";  
     }  
     
     $pnone = explode(' ', $_SESSION[nome]);
      
    ?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="padding-top: 5px">
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  href="index.php"><img src="img/devtask_logo.png" width="80px">  </a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-left">
                    <li style="font-size:10px"><a href="index.php"><?php echo $resposta." <b>".$pnone[0]." </b>"; ?></a></li>
                   <!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Exames<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li align="left"><a href='exa_asos.php?order=d'><span></span></a></li>
                            
                            <li align="left" class='last'><a href='exa_periodico.php'><span></span></a></li>
                        </ul>
                    </li>
                   -->
                    <li >
                        <a href="cad_compra.php">
                            Cadastrar Informação
                        </a>                        
                    </li>
                    <li >
                        <a href="grupo.php">
                            Grupos de Compra
                        </a>                        
                    </li>
                    <li >
                        <a href="calculator.php">
                            Calculadora Agro
                        </a>                        
                    </li>
                   
                </ul>
                <form class="navbar-form navbar-left" name="busca" method="POST" action="resultados.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="produto" placeholder="Digite o nome do Produto">
                    </div>
                    <button type="submit" class="btn btn-default">Procurar</button>
                </form>
                <div class="navbar-collapse collapse">    
                    <ul class="nav navbar-nav navbar-right">
                        <li >
                        <a href="logout.php"  >
                            <i class="glyphicon glyphicon-log-out"></i> Sair
                        </a>                        
                    </li>
                        
                    </ul>
                  </div>
            </div><!-- /.navbar-collapse -->
            
        </div><!-- /.container-fluid -->
    </nav>
    
    