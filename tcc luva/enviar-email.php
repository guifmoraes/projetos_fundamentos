<?php

//error_reporting(0); 

$nome = utf8_encode($_POST['nome']);
$email = utf8_encode($_POST['email']);
$mensagem =  utf8_encode($_POST['mensagem']);

require 'PHPMailer/vendor/autoload.php';

$phpMail = new PHPMailer;
$phpMail->isSMTP();

//Configurações do servidor de email

$phpMail->Host = "smtp.gmail.com";
$phpMail->Port = 587;
$phpMail->SMTPSecure = "tls";
$phpMail->SMTPAuth = "true";
$phpMail->Username= "projeto.huet@gmail.com"; //seu email
$phpMail->Password= "ProjetoHuet2021"; //sua senha

//Configuração da mensagem

$phpMail->setFrom($email->Username, "Rafael Gato"); //Seu nome (remetente)
$phpMail->addAddress("projeto.huet@gmail.com"); //Destinatário
$phpMail->Subject = "Fala comigo"; //assunto do email

$conteudo_email = "
Você recebeu uma mensagem de $nome ($email): 
<br><br>

Mensagem:<br>
$mensagem
";

$phpMail->IsHTML(true);
$phpMail->Body = $conteudo_email;

if( $phpMail-> send()){
    echo "Email enviado com sucesso";
}else{
    echo "Falha no envio".$email -> ErrorInfo;
}




