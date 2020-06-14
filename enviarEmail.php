<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

$arquivo = "
<style>

h1{
    font-size:24px;
    
}

p{
    font-size:15px;
    
}

</style>
<html>
    <body>
    <h1>Nome:$nome</h1>
    <h2>Mensagem</h2>
    <p>Mensagem:$mensagem</p>
    </body>
</html>
";

$destino = "tavareswilliamlima@gmail.com";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';

$envio = mail($destino, $assunto, $arquivo, $headers);
if($envio){
    echo"Email Enviado Com sucesso!";
}



?>