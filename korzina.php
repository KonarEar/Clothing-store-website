<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);

    include_once 'MySqlPDO.php';
    include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/styleforkorzina.css">
</head>

<body>

    <header class="header" >

        
        <a href="index.php"><img src="img/logo.png" class="logo"></a>
       

        <div class="catalogs-text">
            <a href="men.php" class="textmen">men</a>
            <a href="woman.php" class="textwoman">woman</a>
            <a href="kid.php" class="textkids">kids</a>
        </div> 



        
        <div >
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


        <!-- <a href=""><img src="img/1483063.png" class="korzimg"></a> -->
   </header>

<div class="polosa"></div>


    <main>

           <?php


$conn = mysqli_connect('localhost' , 'root' , '', 'abibas');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}

//
session_start();

$login = $_SESSION['login'];
$id = $login ? '' : 8;

if ($login) {

 $connection = mysqli_connect('localhost', 'root', '', 'abibas');

        $query = "SELECT * FROM users WHERE login = '$login'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $id = $row['id'];
        } 
    }    
//


$sql = "SELECT * FROM prod WHERE `login` = $id";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; 
    
    echo "<h1>Товаров в корзине: $rowsCount</h1>";

    $conn = mysqli_connect('localhost', 'root', '', 'abibas'); 
if ($conn->connect_error) { 
    die("Ошибка: " . $conn->connect_error); 
} 

// $sql = "SELECT p.img, p.name, p.price, pr.id
//         FROM prod pr
//         JOIN products p ON pr.name_in_php = p.id ";

//
$sql = "SELECT p.img, p.name, p.price, pr.id
        FROM prod pr
        JOIN products p ON pr.name_in_php = p.id
        WHERE pr.login = $id";
//

if ($result = $conn->query($sql)) {
    $cost = 0;
    echo "<table>";
    echo "<tr><th>Товар</th><th>Название</th><th>Цена</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        $cost += $row['price'];
        echo "<td><img src='" . $row['img'] . "' alt='' class='korzinaimg'/></td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>
                <form action='delete.php' method='post'> 
                    <input type='hidden' name='id' value='" . $row["id"] . "' /> 
                    <input type='submit' class='buttondelete' value='Удалить из корзины'> 
                </form>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<span class='allcosts'>Цена всех товаров: $cost</span>";
    
    $result->free();
} else {
    echo "Ошибка: " . mysqli_error($conn);
}

mysqli_close($conn);
}



?>


<button id="openPanel" class="chechout">Оформить заказ</button>
<?php
session_start();

if (isset($_GET['error'])) {
    $error_message = '';
    switch ($_GET['error']) {
        case 'empty_cart':
            $error_message = "Ошибка: Ваша корзина пуста. Добавьте товары перед оформлением заказа.";
            break;
        case 'delete_error':
            $error_message = "Ошибка при удалении товаров из корзины. Попробуйте еще раз.";
            break;
        case 'order_error':
            $error_message = "Ошибка при оформлении заказа. Пожалуйста, попробуйте позже.";
            break;
        default:
            $error_message = "Произошла ошибка. Пожалуйста, свяжитесь с администратором.";
            break;
    }
    echo '<div style="color: red;">' . $error_message . '</div>';
} elseif (isset($_GET['success'])) {
    $success_message = '';
    switch ($_GET['success']) {
        case 'order_placed':
            $success_message = "Заказ успешно оформлен. Спасибо!";
            break;
        default:
            $success_message = "Действие выполнено успешно.";
            break;
    }
    echo '<div style="color: green;">' . $success_message . '</div>';
}
?>
  
  <div id="panel" class="panel">
    <span id="closePanel" class="close">&times;</span>
    <p class="payment">Оплата заказа</p>
    <?php echo "<h1 class='countofgoods'>Товаров в корзине: $rowsCount</h1>"; ?>
  
    <form action="process_order.php" method="post">
        <?php echo "<span class='totalcost'>Цена всех товаров: $cost</span>"; ?><br><br>
        <input type="text" name = "address" class="addressbut" id="address" required placeholder="Ваш адрес" minlength="3" ><br><br>
        <input type="text" name = "phone" class="telbut phone-field" id="phone" required placeholder="Ваш телефон"data-rule-required="true" data-rule-minlength="10" ><br><br>
        <input type="hidden" name="cost" value="<?php echo $cost; ?>">
        <input type="submit" class="submtp payfortheorder" value="Оплатить заказ">
    </form>
  </div>


    </main>






    

     


    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>
    <script src="main.js"></script>

    <script>
            const openPanelButton = document.getElementById('openPanel');
            const closePanelButton = document.getElementById('closePanel');
            const panel = document.getElementById('panel');

            openPanelButton.addEventListener('click', function() {
            panel.style.display = 'block';
            });

            closePanelButton.addEventListener('click', function() {
            panel.style.display = 'none';
            });
    </script>
    

    <script type="text/javascript">
        $('.phone-field').inputmask("+7(999)999-9999");
        
        jQuery.validator.addMethod("checkMaskPhone", function(value, element) {
            return /\+\d{1}\(\d{3}\)\d{3}-\d{4}/g.test(value); 
        });
        
        var form = $('.form-request');
        form.validate();

        $.validator.addClassRules({
            'phone-field': {
                checkMaskPhone: true,
            }
        });
        
        form.submit(function(e){
            e.preventDefault();
            if (form.valid()) {
                alert('Форма отправлена');
            }
            return;
        });
    </script>


</body>
</html>