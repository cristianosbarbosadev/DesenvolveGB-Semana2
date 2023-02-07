<?php

// Recolha os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

// Monta o corpo da mensagem
$corpo = "De: $nome\n";
$corpo .= "Email: $email\n";
$corpo .= "telefone: $telefone\n";
$corpo .= "Mensagem:\n$mensagem\n";

// Configura os cabeçalhos do e-mail
$cabecalhos = "From: $nome <$email>\r\n";

// Envia o e-mail
mail('cristianosbarbosa.dev@gmail.com', $telefone, $corpo, $cabecalhos);

// Redireciona para a página de obrigado
header('Location: index.html');

?>
