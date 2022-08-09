<!DOCTYPE html>
<html lang="ptbr">
  <title>Projeto Huet</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/home.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

  <body>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px;">Recolher Menu</a>
    <div class="space"></div><!--space-->
    <div class="w3-container">
      <!--<h3 class="w3-padding-64"><b>Projeto<br>Huet</b></h3>-->
      <img src="LOGO HUET-1.png" height="180px" width="150">
    </div>
    <div class="space"></div><!--space-->
    <div class="w3-bar-block" class="padding-img">
      <a href="#quemSomos" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Quem Somos?</a>  
      <a href="#FAQ" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FAQ</a> 
      <!--<a href="#beneficios" onclick="w3_close()" class="w3-ba r-item w3-button w3-hover-white">Nossos Beneficios</a>
      <a href="#galeria" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Galeria</a> -->
      
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contato</a>
      
      <br><br><br><br><br>
      <a href="loginPage.php" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Entrar</a>
      <a href="cadastro.php" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Registrar</a>

    </div>
  </nav>

  <!-- Top menu on small screens -->
  <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>Projeto Huet</span>
  </header>

  

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- Conteudop a pagina -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">


    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
      <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-i mage">
        <p id="caption"></p>
      </div>
    </div>

    <!-- Quem Somos -->
    <div class="w3-container" id="quemSomos" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Quem somos?</b></h1>
      <hr style="width:50px;border:5px solid #292929" class="w3-round">
      <p>Nós somos um grupo de 8 estudandes, cursando ensino médio técnico integrado de informática pelo Centro De Educação Profissional Irmão Mario Cristovão (TecPuc).</p>
      <p>O <em>Projeto Huet</em> é uma iniciativa de facilitar e ajudar a inclusão de pessoas afônas e mudas no ambiente escolar e de trabalho. Pois uma grande parte de alunos e trabalhadores perdem oportunidades e desenvolvem uma barreira mental que os empede de ser bons alunos ou até se tornar um destaque em sua área profissional.</p>
      <p> </p>
    </div>

    <!-- FAQ -->
    <div class="w3-container" id="FAQ" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>FAQ</b></h1>
      <hr style="width:50px;border:5px solid #292929" class="w3-round">
      <p>Durante uma pesquisa de mercado sobre a luva conversora, surgiu algumas dúvidas sobre o Projeto Huet e a sua funconalidade</p>

      <p><!--<b>Perguntas frequentes realizadas aos integrantes do Projeto Huet:</b>--></p>
    </div>

    <!-- Perguntas -->
    <div class="w3-row-padding w3-grayscale">
      <div class="w3-col m4 w3-margin-bottom">
        <div class="w3-light-grey">
          <img src="/w3images/team2.jpg" alt="" style="width:100%">
          <div class="w3-container">
            <h3>Vocês planejam vender o produto?</h3>
            <p class="w3-opacity"></p>
            <p>Ainda estamos em desenvolvimento do projeto, não temos nenhuma previsão de quando ele poderá ser lançado para o público, porém, caso isso aconteça notificaremos O público pelo nosso site.</p>
          </div>
        </div>
      </div>
      <div class="w3-col m4 w3-margin-bottom">
        <div class="w3-light-grey">
          <img src="/w3images/team1.jpg" alt="" style="width:100%">
          <div class="w3-container">
            <h3>Já possuem algum preço em mente?</h3>
            <p class="w3-opacity"></p>
            <p>Um preço definitivo para o produto não, mas nós vamos deixá-lo o mais acessível possível para todas pessoas que estiverem interessadas na luva conversora!</p>
          </div>
        </div>
      </div>
      <div class="w3-col m4 w3-margin-bottom">
        <div class="w3-light-grey">
          <img src="/w3images/team3.jpg" alt="" style="width:100%">
          <div class="w3-container">
            <h3>Vocês possuem outros projetos?</h3>
            <p class="w3-opacity"></p>
            <p>Atualmente não, a luva conversora é o nosso primeiro projeto, mas nossa equipe está trabalhando focado no desenvolvimento dela.</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Contato -->
    <div class="w3-container" id="contact" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Contato</b></h1>
        
      <p>Você tem alguma pergunta, interesse ou até mesmo uma sugestão? Críticas construtivas são sempre bem vindas!!!</p>
      <form action="enviar-email.php" method="POST">
        <div class="w3-section">
          <label>Nome</label>
          <input class="w3-input w3-border" type="text" name="nome" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="email" name="email" required>
        </div>
        <div class="w3-section">
          <label>Mensagem</label>
          <input class="w3-input w3-border" type="text" name="mensagem" required>
        </div>
          <button type="submit" name="Enviar" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Enviar Mensagem</button>
      </form>  
    </div>

  <!-- Fim da pagina  -->
  </div>

  <!-- W3.CSS Container -->
  <div class="w3-light-grey w3-container w3-padding-32 center" style="margin-top:75px;padding-right:58px"><p class="w3-right" title="W3.CSS" class="w3-hover-opacity">Todos os direitos reservados ao <em>Projeto Huet</em></p></div>

  </body>
</html>