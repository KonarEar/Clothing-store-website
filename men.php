<?php
include_once 'MySqlPDO.php';
include_once 'db.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Man Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/styleformen.css">
    <style>

    </style>
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
   </header>

<div class="polosa"></div>


<main>
    
    <img src="img/men/boots/5.png" class="boots-img" id="boots-animation"><br>
    <img src="img/men/hoodie/5.png" class="hoodie-img" id="hoodie-animation"><br>
    <img src="img/men/pants/5.png" class="pants-img" id="pants-animation">

    



<form action="vvod2.php" method="post">

    <div class="blockboots" id="blockboots">

        <?php 

            $stmt = $pdo->query("SELECT * FROM products WHERE `type` = 'boots' AND `category_of_people` = 'man'");
            $count = 0;

            echo '<div class="row">';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($count % 3 == 0) {
                    echo '</div><div class="row">';
                }


                echo '<div class="col-md-4 card">';
                echo '<img src="' . $row['img'] . '" class="card-img-top" alt="' . $row['name'] . '">';
                echo '<div class="card-body">';
                echo '<h3 class="card-title">' . $row['name'] . '</h3>';
                echo '<p class="card-text">Цена: ' . $row['price'] . ' руб.</p>';
                echo '<button class="buybot1" name="product_id" value="' . $row['id'] . '">В корзину</button>'; 
                echo '<input type="hidden" name="category_of_people" value="'.$row['category_of_people'].'">';

                echo '</div>';
                echo '</div>';

                $count++;
            }
            echo '</div>';
                
        ?> 

    </div>


    <div class="blockhoodie" id="blockhoodie">
        <?php 

            $stmt = $pdo->query("SELECT * FROM products WHERE `type` = 'hoodie' AND `category_of_people` = 'man'");
            $count = 0;

            echo '<div class="row">';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($count % 3 == 0) {
                    echo '</div><div class="row">';
                }

                echo '<div class="col-md-4 card">';
                echo '<img src="' . $row['img'] . '" class="card-img-top" alt="' . $row['name'] . '">';
                echo '<div class="card-body">';
                echo '<h3 class="card-title">' . $row['name'] . '</h3>';
                echo '<p class="card-text">Цена: ' . $row['price'] . ' руб.</p>';
                echo '<button class="buybot1" name="product_id" value="' . $row['id'] . '">В корзину</button>'; 
                echo '<input type="hidden" name="category_of_people" value="'.$row['category_of_people'].'">';
                echo '</div>';
                echo '</div>';

                $count++;
            }
            echo '</div>';
                
        ?> 
    </div>




    <div class="blockpants" id="blockpants">
        <?php 

            $stmt = $pdo->query("SELECT * FROM products WHERE `type` = 'pants' AND `category_of_people` = 'man'");
            $count = 0;

            echo '<div class="row">';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($count % 3 == 0) {
                    echo '</div><div class="row">';
                }

                echo '<div class="col-md-4 card">';
                echo '<img src="' . $row['img'] . '" class="card-img-top" alt="' . $row['name'] . '">';
                echo '<div class="card-body">';
                echo '<h3 class="card-title">' . $row['name'] . '</h3>';
                echo '<p class="card-text">Цена: ' . $row['price'] . ' руб.</p>';
                echo '<button class="buybot1" name="product_id" value="' . $row['id'] . '">В корзину</button>'; 
                echo '<input type="hidden" name="category_of_people" value="'.$row['category_of_people'].'">';
                echo '</div>';
                echo '</div>';

                $count++;
            }
            echo '</div>';
                
        ?> 
    </div>

</form>








        

    


                 

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