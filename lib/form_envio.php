<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $room = $_POST['room'];
    $message = $_POST['message'];

    // Configurar o destinatário do e-mail
    $to = "seuemail@example.com";

    // Configurar o assunto do e-mail
    $subject = "Novo pedido de reserva";

    // Montar o corpo do e-mail
    $body = "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Check-in: $checkin\n";
    $body .= "Check-out: $checkout\n";
    $body .= "Adultos: $adults\n";
    $body .= "Crianças: $children\n";
    $body .= "Quarto: $room\n";
    $body .= "Mensagem: $message\n";

    // Enviar e-mail
    mail($to, $subject, $body);

    // Redirecionar de volta para a página de reserva
    header("Location: booking.html");
    exit();
} else {
    // Se o método de requisição não for POST, redirecione de volta para a página de reserva
    header("Location: booking.html");
    exit();
}
?>