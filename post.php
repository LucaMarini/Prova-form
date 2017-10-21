<html>
<head>
<title>Post</title>
<link rel="stylesheet" href="styleindex.css" type="text/css" />
</head>
<body>
<h1 align="center">Risposta Post</h1>
<header>
<nav align="center"> 
    <a class="linknav" href="index.html">Home</a>
    <a class="linknav" href="get.html">Get</a>
    <a class="linknav" href="post.html">Post</a>
    <a class="linknav" href="server.php">Server</a>
</nav>
</header>
<?php
$password = $_POST["password"];
$confpassword = $_POST["passconferma"];
if($password == $confpassword)
{
	$nome = $_POST["nome"];
	$cognome = $_POST["cognome"];
	$genere = $_POST["genere"];
	$email = $_POST["email"];
	echo "La richiesta a nome di $nome $cognome ($genere) è stata registrata.<br>";
	echo "Con indirizzo e-mail: $email.<br>";
	echo "La richiesta è arrivata alle ore ", date("H:i:s "),"del giorno: ", date("d-m-Y");
}
else
{
	echo "Le password non corrispondo.";
}
?>
<br><br>
<footer>
<p align="center">
Copyright &copy; <a class="one" href="https://github.com/LucaMarini">Luca Marini</a> e <a class="one" href="https://github.com/AndreaMontinovo">Andrea Montinovo</a>
</p>
</footer>
</body>
</html>
