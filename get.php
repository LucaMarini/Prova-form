<html>
<head>
<title>Get</title>
<link rel="stylesheet" href="styleindex.css" type="text/css" />
</head>
<body>
<h1 align="center">Risposta Get</h1>
<header>
<nav align="center"> 
    <a class="linknav" href="index.html">Home</a>
    <a class="linknav" href="get.html">Get</a>
    <a class="linknav" href="post.html">Post</a>
    <a class="linknav" href="server.php">Server</a>
</nav>
</header>
<?php
$password = $_GET["password"];
$confpassword = $_GET["passconferma"];
if($password == $confpassword)
{
	$nome = $_GET["nome"];
	$cognome = $_GET["cognome"];
	$genere = $_GET["genere"];
	$email = $_GET["email"];
	echo "La richiesta a nome di $nome $cognome ($genere) è stata registrata.<br>";
	echo "Con indirizzo e-mail: $email<br>";
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
