<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php session_start(); ?>
<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
    include_once 'MySqlPDO.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/styleforuserauthorization.css">
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
        


        
        <a href="korzina.php"><img src="img/1483063.png" class="korzimg"></a>
   </header>

<div class="polosa"></div>


    <main>




        <?php

$login = $_SESSION['login'];
if ($login) {
    if ($login == 'Гость') {
        echo '<p class="incorrect">Введён неправильный логин или пароль</p> <br>';

      echo '<p class="authoriz">Авторизация:</p>';
      echo '<form action="authorization.php" method="post">';
      echo '  <input name="login" placeholder="Логин" class="loginauth">';
      echo '  <input type="password" name="password" placeholder="Пароль" class="passwordauth"> <br> <br>';
      echo '  <input type="submit" name="submit" value="Войти" class="enterauth">';
      echo '</form>';
  
      echo '<br><form action="UserRegistration.php" method="post">';
      echo '<br><br><input type="submit" name="registration" value="Регистрация" class="registrationauth">';
      echo'</form>';
      
      
    } else { 

        $connection = mysqli_connect('localhost', 'root', '', 'abibas');

        $query = "SELECT * FROM users WHERE login = '$login'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $name = $row['name'];
            $surname = $row['surname'];
            $datas = $row['datas'];
            $login = $row['login'];
            


            echo "<p class='authname'>Здравствуйте, $name $surname</p>";
            echo '<p class = "authlog"> Ваш логин:  ', $login,'</p>';
            echo '<p class= "authdata"> Ваша дата рождения:', $datas,'</p>';

            echo '<button id="toggleButton" class="toggleButton">Сменить пароль</button>';


            session_start();
            if(isset($_SESSION['error_message'])){
                echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
                unset($_SESSION['error_message']); 
            }
            


            echo '<form action="changepassword.php" method="post" class="changepass" id="changeblock"style="display: none"><br> ';
                echo '<input type="password" class="changeinputs" name="changepass" id="changepass"  required placeholder="Пароль" minlength="3"><br><br>';
                echo '<input type="password" class="changeinputs" name="confirm_password" id="confirm_password"  required placeholder="Подтвердите пароль" minlength="3"><br><br>';
                echo '<input type="submit" class="submchange" id="submchange"value="Сменить">';
            echo '</form>';
   


        echo '<form action="logout.php" method="post">';
        echo ' <input type="submit" name="logout" value="Выйти" class="logout">';
        echo '</form>';
        }

        


        // echo "<p class='authlog'>Здравствуйте, $login</p>";
        // echo '<form action="logout.php" method="post">';
        // echo ' <input type="submit" name="logout" value="Выйти" class="logout">';
        // echo '</form>';
    }
} else {
    echo '<p class="hello">Здравствуйте, гость</p>';
    echo '<p class="authoriz">Авторизация:</p>';
    echo '<form action="authorization.php" method="post">';
    echo '  <input name="login" placeholder="Логин" class="loginauth">';
    echo '  <input type="password" name="password" placeholder="Пароль" class="passwordauth"> <br> <br>';
    echo '  <input type="submit" name="submit" value="Войти" class="enterauth">';
    echo '</form>';

    echo '<br><form action="UserRegistration.php" method="post">';
      echo ' <br><br><input type="submit" name="registration" value="Регистрация" class="registrationauth">';
    echo'</form>';
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



<script>
document.addEventListener("DOMContentLoaded", function() {
    var toggleButton = document.getElementById("toggleButton");
    var changeblock = document.getElementById("changeblock");


    toggleButton.addEventListener("click", function() {
        if (changeblock.style.display === 'none') {
            changeblock.style.display = 'block'; 
        } else {
            changeblock.style.display = 'none'; 
        }
    });
});
</script>

</body>

</html>

