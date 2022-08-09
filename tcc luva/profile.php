<?php

include('verifica_login.php');
include("conexao.php");
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
					
					<p>Nome: <?php echo $_SESSION['nome'];?></p>
					<p>Usuario: rafael</p>
					<p>Email: rafael.giustina2@gmail.com</p>
					<p>Data De Cadastro: 2021-07-02</p> 

			<!--		<div class="content">
				<table class="rTable"> 
				<therad>
					<th>Id</th>
					<th>Nome</th>
					<th>Usuario</th>
					<th>Email</th>
					<th>Data de Cadastro</th>
				</thead>

				<tbody>
				<td>1</td>
				<td><?php echo $_SESSION['nome'];?></td>
				<td>AAA</td>
				<td>lila@gmail.com</td>
				<td>11/07/2021</td>
				-->
    </tbody>
</table>
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
