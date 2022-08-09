<?php

include('verifica_login.php');
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<p><?php echo $_SESSION['nome'];?></p>
					</div>
					<div class="profile-usertitle-job">
						Seja Bem-Vindo(a)
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE 
				<-- SIDEBAR BUTTONS 
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>		-->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="profile.php">
							<i class="glyphicon glyphicon-user"></i>
							Perfil </a>
						</li>
						<li>
							<a href="painel.php">
							<i class="glyphicon glyphicon-comment"></i>
							Painel </a>
						</li>
						<li>
							<a href="configuracoesDeConta.php" target="">
							<i class="glyphicon glyphicon-wrench"></i>
							Configurações De Conta<i class="fa fa-contao" aria-hidden="true"></i> </a>
						</li>
						<li>
							<a href="suportePage.php">
							<i class="glyphicon glyphicon-flag"></i>
							Suporte </a>
						</li>
						<li>
							<a href="logout.php">
							<i class="glyphicon glyphicon-home"></i>
							Sair </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
				<form class="profile">
					<h3>Olá, <?php echo $_SESSION['nome'];?></h3>
					<br>
					<br>
					<p>Você está com algum problema?<p>
					<p>Mande um Ticket para o nosso suporte!!!</p>
					<br>
					<form action="enviar-email.php" method="POST">
						<!--<div style="margin-top: 16px !important;margin-bottom: 16px !important;">
						<label>Nome</label>
						<input class="w3-input w3-border" type="text" name="nome" required>
						</div>
						<div style="margin-top: 16px !important;margin-bottom: 16px !important;">
						<label>Email</label>
						<input class="w3-input w3-border" type="email" name="email" required>
						</div>
						<div style="margin-top: 16px !important;margin-bottom: 16px !important;">-->
						<label>Mensagem</label>
						<input style="padding: 8px;display: block;border: none;border-bottom: 1px solid #ccc;width: 100%;padding: 8px;display: block;border: none;border-bottom: 1px solid #ccc;width: 100%;" type="text" name="mensagem" required>
						</div>
						<button type="submit" name="Enviar" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Enviar Mensagem</button>
					</form>  
					</div>
				</form>
            </div>
			
		</div>
		
	</div>
</div>
<center>
<strong>Powered by Projeto Huet</strong>
</center>
<br>
<br>
