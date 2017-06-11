
<body data-spy="scroll" data-target=".menu-nav" data-offset="80">
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
      
    ?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  href="index.php"><img src="../img/devtask_logo.png" width="60px" height="40px">  </a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-left">
                    <li style="font-size:10px"><a href="index.php"><?php echo $resposta." <b>".$empresa." </b>"; ?></a></li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Produtos<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li align="left"><a href='produtos.php'><span>Produtos</span></a></li>
                            
                            <li align="left" class='last'><a href='cad_produto.php'><span>Cadastrar</span></a></li>
                        </ul>
                    </li>
                    
                    <li >
                        <a href="financeiro.php?y=<?php echo date("Y"); ?>">
                            Financeiro
                        </a>                        
                    </li>
                </ul>
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
    
    