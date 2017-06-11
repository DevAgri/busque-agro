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
</head>
<?php include 'header.php'; 
$sql_produtos = mysql_query("SELECT * FROM produtos WHERE fornecedorid_pro = '$_SESSION[id]' ORDER BY id_pro DESC");

$row_produtos = mysql_num_rows($sql_produtos);

?>
    <?php include 'footer.php'; ?> 
    <br></br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12" >
<?php
if($row_produtos == 0){
?>
                <div class="alert alert-danger" align="center">
                    Voce Não possui nenhum produto cadastrado!
                </div>
<?php
}else{
    
    while ($res_produtos = mysql_fetch_assoc($sql_produtos)){
        
        if($res_produtos['ativo_pro'] == '1'){
            $ativo = 'success';
        }
        if($res_produtos['ativo_pro'] == '0'){
            $ativo = 'danger';
        }
        
        if($res_produtos['foto_pro'] == ''){
            $foto = '../img/semfoto.jpg';
        }else{
            $foto = $res_produtos['foto_pro'];
        }
        
        switch ($res_produtos['ativo_pro']){
            case 1:
                $ativo = "Sim";
                break;
            case 0:
                $ativo = "Não";
                break;
        }
        
        switch ($res_produtos['tipo_pro']){
            case 1:
                $tipo = 'Inseticida';
                break;
            case 2:
                $tipo = 'Fungicida';
                break;
            case 3:
                $tipo = 'Herbicida';
                break;
            case 4:
                $tipo = 'Fertilizante';
                break;
        }
        
        $data_cad = implode("/",array_reverse(explode("-", $res_produtos['data_pro'])));
        
        
?>
                
                <div class="panel-group">
                    <div class="panel panel-<?php echo $ativo; ?>">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" href="#collapse<?php echo $res_produtos['id_pro'] ?>">
                              <?php echo $res_produtos['marca_pro'].' - '.$res_produtos['modelo_pro'] ?>
                          </a>
                        </h4>
                      </div>
                      <div id="collapse<?php echo $res_produtos['id_pro'] ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <img src="<?php echo $foto; ?>" class="img img-responsive" width="120px" height="120px"></img>  
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                 <label>Tipo: </label><?php echo $tipo; ?>   
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <label>Eficiência: </label><?php echo $res_produtos['efi_pro']; ?> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Descrição: </label> <?php echo $res_produtos['desc_pro']; ?>  
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Preço: </label> <?php echo $res_produtos['preco_pro']; ?>  
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6" align="left">
                                    <label>Anúncio em atividade: </label> <?php echo $ativo; ?>  
                                </div> 
                                <div class="col-xs-12 col-sm-6" align="right">
                                    <label>Data de cadastro: </label> <?php echo $data_cad; ?>  
                                </div>                                
                            </div>
                        </div>                        
                      </div>
                    </div>
                  </div>
            
    
   <?php
    }
   
   }
       
    ?>    
            </div>
        </div>
    </div>

      
</body>
</html>