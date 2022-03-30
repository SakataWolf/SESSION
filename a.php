<head>
	<meta charset="utf-8">
</head>
<?php
session_start();
if ($_POST) {
	# code...
$_SESSION['nome']= $_POST['nome'];
header('location: b.php');
}
?>
<form method="post">
	Digite seu nome: <input type="text" name="nome"><br>
	<button>Entrar</button>
</form>