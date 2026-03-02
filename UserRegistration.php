<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php session_start(); ?>
<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/styleforuserregistration.css">
</head>
<body>

    <header class="header" >

        
        <a href="index.php"><img src="img/logo.png" class="logo"></a>
       

        <div class="catalogs-text">
            <a href="men.php" class="textmen">men</a>
            <a href="woman.php" class="textwoman">woman</a>
            <a href="kid.php" class="textkids">kids</a>
        </div> 




        <div>
            <a href="support.php"><img src="img/support.png" class="support-img"></a>
            <h2 class="support-text">Техническая поддержка</h2>
        </div>
        
   </header>

<div class="polosa"></div>




    <main>

       




        <form action="" method="post" class="formreg">
            <h1 class="registrationuser">Регистрация пользователя</h1><br>
            <input type="text" name="nameinput" class="nameinp" id="nameinput" required placeholder="Имя"minlength="2" >
            <input type="text" name="surnameinput" class="surnameinp" id="surnameinput" required placeholder="Фамилия"minlength="3" ><br><br>

            <input type="text" name = "llog" class="LoginBut" id="llog" required placeholder="Логин" minlength="3" >
            <input type="password" name = "ppass" class="passbut phone-field" id="ppass"  required placeholder="Пароль" minlength="3"><br><br>

            <input type="date" name = "dateinput" class="dateinp" id="dateinput"  required><br><br>

            <input type="submit" class="submreg" value="Зарегистрироваться">
        </form>
  
        <?php

if (isset($_POST["llog"]) && isset($_POST["ppass"])  && isset($_POST["nameinput"])  && isset($_POST["surnameinput"]) && isset($_POST["dateinput"])) {
      
    $conn = mysqli_connect('localhost' , 'root' , '', 'abibas');
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $login = mysqli_real_escape_string($conn, $_POST["llog"]);
    $password = mysqli_real_escape_string($conn, $_POST["ppass"]);
    $name = mysqli_real_escape_string($conn, $_POST["nameinput"]);
    $surname = mysqli_real_escape_string($conn, $_POST["surnameinput"]);
    $datas = mysqli_real_escape_string($conn, $_POST["dateinput"]);

    // Проверяем, существует ли логин уже в базе данных
    $query = "SELECT `login` FROM `users` WHERE `login` = '$login'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='login-busy'>Логин уже существует</div>";
    } else {
        $query = "INSERT INTO `users` (`id`, `name`, `surname`, `login`, `pass`, `datas`) VALUES (NULL, '$name',  '$surname', '$login', '$password', '$datas');";
        if(mysqli_query($conn, $query)){
            echo "Данные успешно добавлены";
        } else{
            echo "Ошибка: " . mysqli_error($conn);
        }
        header("Location: UserAuthorization.php");
    }
}

?>



    </main>



    <footer>
        <div class="footer-block">
            <span class="footer-text">© 2024 abibas Moscow, Inc</span>
            <img src="img/vk.png" class="imgvk">
            <img src="img/inst.png" class="imginst">
        </div>
    </footer>

    


    
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>
    <script src="main.js"></script>

</body>

</html>

