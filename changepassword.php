<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abibas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


session_start();
$login = $_SESSION['login'];

$new_password = $_POST['changepass'];
$confirm_password = $_POST['confirm_password'];

if($new_password != $confirm_password){
    $_SESSION['error_message'] = "Пароли не совпадают. Пожалуйста, введите одинаковые пароли.";
    header("Location: UserAuthorization.php");
    exit;
}


$sql = "UPDATE users SET pass = '" . $new_password . "' WHERE login = '" . $login . "'";

if ($conn->query($sql) === TRUE) {
    echo "Пароль успешно изменен";
    session_destroy();

    header("Location: UserAuthorization.php");
} else {
    echo "Ошибка при изменении пароля: " . $conn->error;
}

$conn->close();
?>