<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<title>E-MAIL</title>

		<style>
			body {
				font-family: Arial, helvetica, sans-seri
				font-size: leam;
				text-align: center;
				color: #707173;
			}
		</style>

    </head>


<body>

<?php

//recibe los datos ingresados
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$comentario = $_POST ['mensaje'];


//si internat poner un link con http
if (eregi('http:', $comentario)) {
die("is not allowed the link of -http://-! !");
}


//si ingresa un mail no valido
if (!$email == "" && (!strstr($email, "@") || !strstr($email, ".")))
{
echo "<h2>By Please enter an email valid </h2>\n";
$badinput = "<h4>Your message not been submitted</h4>\n";
echo "$badinput";
die ("<a href='javascript: history.go(-1)'> Return! </a>");
}

//si no rellena loscampos necesarios
if (empty($nombre) || empty($email) || empty($comentario)) {
echo "<h2> By please fill in the boxes full </h2>\n";
die ("<a href='javascript: history.go(-1)'> Return! </a>");
}
$attn = $attn;

//aqui debe ingresar el usurio el mail
$subject = 'Message from our form of contact' ;
$comentario = stripcslashes($comentario);


//aqui se genera el cuerpo del mensaje
$message = "Of: $nombre \n 
E-mail: $email \n
Mensaje: $comentario";

$from = "from: $email\r\n";

//ingresa mail receptor 
mail("lmrosales0@misena.edu.co", $subject, $message, $from);

?>

<script type="text/javascript">
window.location="contactOK.html";
</script>

</body>
</html>
