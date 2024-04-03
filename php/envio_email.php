<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Incluir a classe do PHPMailer
require 'vendor/autoload.php';

// Configurações do servidor SMTP
$smtpHost = 'smtp.seuservidor.com'; // Endereço do servidor SMTP
$smtpPort = 587; // Porta do servidor SMTP
$smtpUsuario = 'seu_email@example.com'; // Seu endereço de e-mail
$smtpSenha = 'sua_senha'; // Sua senha de e-mail

// Dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Criar uma nova instância do PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsuario;
    $mail->Password = $smtpSenha;
    $mail->SMTPSecure = 'tls'; // Use 'tls' ou 'ssl' dependendo das configurações do seu servidor SMTP
    $mail->Port = $smtpPort;

    // Configurações do e-mail
    $mail->setFrom($smtpUsuario, 'Mwanha Kimkia');
    $mail->addAddress('miguelmanuel277shine@gmail.com.com'); // Endereço do destinatário
    $mail->isHTML(true);
    $mail->Subject = 'Nova Reserva - Mwanha Kimkia';
    $mail->Body = "Nova reserva recebida de: $nome <br>Email do cliente: $email";

    // Enviar e-mail
    $mail->send();
    echo 'Obrigado por sua reserva! Entraremos em contato em breve.';
} catch (Exception $e) {
    echo 'Desculpe, houve um problema ao enviar sua reserva. Por favor, tente novamente mais tarde.';
}
?>
