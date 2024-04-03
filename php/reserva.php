<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['select1'];
    $children = $_POST['select2'];
    $room = $_POST['select3'];
    $message = $_POST['message'];

    // Configurações de email
    $to = 'miguelmanuel277shine@gmail.com';
    $subject = 'Nova reserva de quarto';
    $body = "Nome: $name\nEmail: $email\nCheck-In: $checkin\nCheck-Out: $checkout\nAdultos: $adults\nCrianças: $children\nQuarto: $room\nMensagem: $message";

    // Envia o email
    mail($to, $subject, $body);

    // Redireciona de volta para a página de reserva com uma mensagem de sucesso
    header('Location: booking.html?status=success');
} else {
    // Se alguém tentar acessar diretamente o arquivo PHP, redireciona para a página de reserva
    header('Location: booking.html');
}
?> -->
