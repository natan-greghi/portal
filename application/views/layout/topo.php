<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link async href="http://fonts.googleapis.com/css?family=Aladin" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
	<link async href="http://fonts.googleapis.com/css?family=Antic" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
	
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/menufixedtop.js"></script>
	

</head>
<body>
	<div class="container-fluid topo">
		<div class="row ">
			<div class="fundo"></div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
				<img src="img/logoIFSP.png" id="logo">
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h1 class="neon-text">Portal de Estágios IFSP</h1>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<button type="button" data-placement="bottom" data-toggle="popover-login" data-html="true" id="btnlogin" class="btn btn-default">Login</button>
				<div id="popover-login" class="hide">
					<form class="form-inline" role="form">
						<div class="form-group login">
							<input placeholder="Email" class="form-control" maxlength="40" type="text"> 
							<input placeholder="Senha" class="form-control" maxlength="10" type="password">
							<button type="submit" class="btn btn-primary btn-sm">Logar-se</button>
							<a href="cadastro_usuario.php"><p> Ainda não cadastrado? Clique aqui</p></a>                                  
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>