<?php
session_start();
if (!isset($_SESSION['p1'])) {
	# code...
	header('location: a.php');
}
echo "<h1>BEM VINDO(A)!!!! ". $_SESSION['nome'].'</h1>';
$img = '';
if ($_SESSION['p1'] == '0') {
	# code...
	$img = 'img/hi.png';
}
else{
	$img = 'img/ouch.png';
}
echo "<img src='".$img."' style='height:50%;'>";
?>