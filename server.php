<html>
<head>
<title>Server</title>
<link rel="stylesheet" href="styleindex.css" type="text/css" />
</head>
<body>
<h1 align="center">Informazioni sullo script e sul computer client</h1>
<header>
<nav align="center"> 
    <a class="linknav" href="index.html">Home</a>
    <a class="linknav" href="get.html">Get</a>
    <a class="linknav" href="post.html">Post</a>
    <a class="linknav" href="server.php">Server</a>
</nav>
</header>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$serverWeb = $_SERVER['SERVER_SOFTWARE'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$macchina = $_SERVER['SERVER_NAME'];
$script = $_SERVER['PHP_SELF'];
echo "<br><br><center>Indirizzo IP della macchina utente: <b>$ip</b>.<center><br>";
echo "<center>Nome del server web che esegue lo script: <b>$serverWeb</b>.<center><br>";
echo "<center>Browser utilizzato: <b>$browser</b>.<center><br>";
echo "<center>Macchina su cui gira il server Web: <b>$macchina</b>.<center><br>";
echo "<center>Nome dello script in esecuzione: <b>$script</b>.<center><br>";
?>
<br><br>
<footer>
<p align="center">
Copyright &copy; <a class="one" href="https://github.com/LucaMarini">Luca Marini</a> e <a class="one" href="https://github.com/AndreaMontinovo">Andrea Montinovo</a>
</p>
</footer>
</body>
</html>
