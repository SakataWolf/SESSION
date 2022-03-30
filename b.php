<head>
	<meta charset="utf-8">
</head>
<?php
session_start();
if (empty($_SESSION['nome'])){
	# code...
	header('location: a.php');
}
echo "<h1>BEM VINDO(A) !!!  " .$_SESSION['nome'] .'</h1>';
?>
<form method="post">
	<fieldset>
		<legend>Pergunta 1: </legend>
		Quanto é ((( 3² + 14 ) / 2 ) * 0 ) ?
		<input type="text" name="p1">
	</fieldset>
	<button>Responder</button>
</form>
<?php
if ($_POST) {
	# code...
	$_SESSION['p1'] = $_POST['p1'];
	header('location: c.php');
}