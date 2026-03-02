<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/styleforindex.css">
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
        



        <!-- <div>
            <a href="UserAuthorization.php">
                <input type="submit" class ="authorization" value="Гость"></input>
            </a>
        </div>  -->

<?php
    session_start();

    if(isset($_SESSION['login'])){
        echo '<div>';
            echo '<a href="UserAuthorization.php">';
                echo '<button class="authorization">' . $_SESSION['login'] . '</button>';
            echo '</a>';
        echo '</div>';
    } else {
        echo '<div>';
            echo '<a href="UserAuthorization.php">';
                echo '<button class="authorization">Гость</button>';
            echo '</a>';
        echo '</div>';
    } 
?>




        <a href="korzina.php"><img src="img/1483063.png" class="korzimg"></a>

        <!-- <a href=""><img src="img/1483063.png" class="korzimg"></a> -->
   </header>

<div class="polosa"></div>


    <main>

           

            <img src="img/picture.png" class="img-picture"> 

            <div class="buttons">
                
                <div class="">
                    <h1 class="">ВЫДЕЛЯЙТЕСЬ В ТОЛПЕ</h1>
                    <h2 class="">Отправляйтесь на спортивные фестивали <br> стильно благодаря нашей подборке одежды</h2>  
                </div>
                
                    <div class="transition-button">
                        <a href="men.php"><p class="but">MEN</p></a>
                        <a href="woman.php"><p class="but">Women</p></a>
                    </div>
             
            </div>
    </main>



    <footer>
        <div class="footer-block">
            <span class="footer-text">© 2024 abibas Moscow, Inc</span>
            <img src="img/vk.png" class="imgvk">
            <img src="img/inst.png" class="imginst">
        </div>
    </footer>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>
</html>