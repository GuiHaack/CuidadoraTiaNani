<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/controllers/mailer/vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    echo '<script>';
    echo 'console.log("Deveria entrar aqui")';
    echo '</script>';
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'smtp.umbler.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@cuidadoratianani.com.br';
    $mail->Password = 'e5d4s19GUI*';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('contato@cuidadoratianani.com.br', utf8_decode($dados['nome']));
    $mail->addAddress('contato@cuidadoratianani.com.br', 'Contato Cuidadora Tia Nani');

    $mail->isHTML(true);

    $mensagem = '';
    if (!empty($dados['assunto'])) {
        $mensagem .= "<b>Assunto: </b>" . utf8_decode($dados['assunto']) . "<br>";
    }
    if (!empty($dados['nome'])) {
        $mensagem .= "<b>Nome: </b>" . utf8_decode($dados['nome']) . "<br>";
    }
    if (!empty($dados['phone'])) {
        $mensagem .= "<b>Telefone: </b>" . utf8_decode($dados['phone']) . "<br>";
    }
    if (!empty($dados['email'])) {
        $mensagem .= "<b>Email: </b>" . utf8_decode($dados['email']) . "<br>";
    }
    if (!empty($dados['mensagem'])) {
        $mensagem .= "<b>Mensagem: </b>" . utf8_decode($dados['mensagem']) . "<br>";
    }

    $mail->Subject = utf8_decode($dados['assunto']);
    $mail->Body    = nl2br($mensagem);
    $mail->AltBody = nl2br(strip_tags($mensagem));

    $mail->send();

    $mail->clearAddresses();

    $mail->setFrom('contato@cuidadoratianani.com.br', "Contato Cuidadora Tia Nani");
    $mail->addAddress(utf8_decode($dados['email']), utf8_decode($dados['nome']));

    $mail->Subject = 'Recebi a mensagem de contato';
    $mail->Body = "Prezado(a) " . utf8_decode($dados['nome']) . "<br><br>Recebemos o seu e-mail.<br>Será lido o mais rápido possível.<br>Em breve será respondido.<br><br>Assunto: " . utf8_decode($dados['assunto']) . "<br>Conteúdo: " . utf8_decode($dados['mensagem']);

    $mail->send();
} catch (Exception $e) {
}
