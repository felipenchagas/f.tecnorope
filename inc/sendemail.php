<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$name     = $_POST['name'];
$email    = trim($_POST['email=']);
$emaildestinatario = 'contato@tecnorope.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$phone     	   = $_POST['telefone'];
$solution         = $_POST['assunto'];
$requirement         = $_POST['mensagem'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>CONTATO - SITE - FUTGRASS</P>
<p><b>Nome:</b> '.$name.'
<p><b>E-Mail:</b> '.$email.'
<p><b>Telefone:</b> '.$phone.'
<p><b>Assunto:</b> '.$solution.'
<p><b>Mensagem:</b> '.$requirement.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($email, $solution, $mensagemHTML, $headers); 
 
 if($envio)
echo "<script>location.href='sucesso.html'</script>"; // Página que será redirecionada

?>
