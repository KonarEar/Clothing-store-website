<?php
session_start();
$login=$_POST['login'];
$pas=$_POST['password'];
$db=mysqli_connect('localhost', 'root', '', 'abibas');
$query="SELECT * FROM users WHERE login='$login' AND BINARY pass='$pas'";
$result=mysqli_query($db, $query);
if (mysqli_num_rows($result))
$_SESSION['login']=$login;
else
$_SESSION['login']='Гость';
header("Location: UserAuthorization.php");
mysqli_close($db);