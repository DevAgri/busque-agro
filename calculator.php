<?php


session_start();

?>
<!D
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Calculadora Agrícola</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript">
			 var mapa_Densidade = {
			 	0: [0.5,0.04,0.08,0.00025,0.03,0.25,0.5],
			 	1: [0.5,0.05,0.05,0.5,0.4,0.25,0.5]
			 }
			 function opcao(){
				var cultura = document.getElementById("cultura").value;
				if(!cultura){
					alert("Cultura não informada");
				}	 
				 	var produto = document.getElementById("produto").value;
				if(!produto){
					alert("Produto não informado");
				}
				var densidade = mapa_Densidade[cultura][produto]
				var hectare = document.getElementById("valorY").value;
				hectare = parseFloat(hectare)
				var result = document.getElementById("resultado")
				result.value = densidade*hectare
			 }
			 
			function valida(){
			 if(document.getElementById("valorY").value == ""){
				 alert("Valor não informador");
				 return false;
				 }else{
					 if(validanumero()){
					 return true;
				 }else{
				 	 return false;
			 }
			 }
			 
			}


		 
		 </script>
	 </head>
	 
	<body>
            <?php 
    if(isset($_SESSION['id'])){
         include 'header.php';
         
    }
   
    ?>
		 <div id="principal" class="container">
                     <div class="row">
                         <div class="col-xs-12">
                             <div class="page-header">
                                <h3> Calcula Agro </h3>
                             </div>
                         </div>
                     </div>
		 		
			 <form id="cult" class="form-horizontal">
			 	<div class="form-group">
    				 <label for="cultura" class="col-sm-2 control-label">Cultura</label>
    				 <div class="col-sm-10">
						 <select id="cultura" class="form-control">
							 <option value="">Selecione a cultura</option>
							 <option value="0">Soja</option>
							 <option value="1">Milho</option>
						 </select>
					 </div>
				</div>
				
				<div class="form-group">
    				 <label for="cultura" class="col-sm-2 control-label">Produto</label>
    				<div class="col-sm-10">	 
                                     <select id="produto" class="form-control">
                                             <option value="">Selecione o produto</option>
                                             <option value="0">YaraVita Glytrel</option>
                                             <option value="1">Standak Top</option>
                                             <option value="2">Nomolt</option>
                                             <option value="3">Pirate</option>+
                                             <option value="4">Fox</option>
                                             <option value="5">Orkestra</option>
                                             <option value="6">Opera</option>
                                     </select> 
                                 </div>
                            </div>

			<div class="form-group">
			 <label for="inputEmail3" class="col-sm-2 control-label">Area</label>
   			 <div class="col-sm-10">
			 	<input id="valorY" placeholder="Informe a area de aplicação" class="form-control" type="text" size="15" onblur="opcao()"></input>
			</div>
			</div>
			<div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Quantidade</label>
                                <div class="col-sm-10">
                                       <input id="resultado" placeholder="Quantidade a ser aplicada" class="form-control" type="text" size="15" disabled="true"/>
                                </div>
                                </div>
                             <div class="row">
                                 <div class="col-xs-12 col-sm-6" align="center">
                                    <button type="button" class="btn btn-success" onclick="opcao()">Calcular</button>
                                
                                 </div>
                                 <div class="col-xs-12 col-sm-6" align="center">
                                     <button type="limpar" class="btn btn-success">Resetar</button>
                                 </div>
                             </div>
                                
		 	</form>
		 </div>
	 
	</body>
 
</html>