<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/styleforsupport.css">
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
            <a href=""><img src="img/support.png" class="support-img"></a>
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

        <h2 class="contact-information">Контактная информация</h2>
       <img src="img/rukopojatie.png" class="partnership-img">
       <img src="img/tehpoddergka.png" class="technical-support-img">
       <img src="img/phone.png" class="phone-img"><br><br><br>

        <span class="partnership-text">По вопросам партнерства </span>
        <span class="technical-support-text">Техническая поддержка</span>
        <span class="phone-text">Телефон по России</span><br>

        <!-- <a href="mailto:AbibasPartnert@mail.ru"><span class="partnership-email">AbibasPartnert@mail.ru</span> </a>
        <a href="mailto:SupportAbibas@mail.ru"><span class="support-email">SupportAbibas@mail.ru</span></a>
        <a href="tel:+79999999999"><span class="phone">+7(999)999-99-99</span></a> -->


        <a href="mailto:AbibasPartnert@mail.ru" class="partnership-email">AbibasPartnert@mail.ru</a> 
        <a href="mailto:SupportAbibas@mail.ru" class="support-email">SupportAbibas@mail.ru</a>
        <a href="tel:+79999999999" class="phone">+7(999)999-99-99</a>
      

        <div class="line"></div>



            <form action="vvod.php" method="post">
                <input type="text" name = "name" class="ImyaBut" id="name" required placeholder="Ваше Имя" minlength="3" ><br>
                <input type="email" name = "email" class="EmailBut" id="email" required placeholder="Ваша почта" >
                <input type="text" name = "phone" class="telbut phone-field" id="phone"  required placeholder="Ваш телефон"data-rule-required="true" data-rule-minlength="10" >
                <textarea name="message" id="message" class="message-text" required placeholder="Текст сообщения" minlength="10"></textarea>
                <input type="submit" class="submtp">

            </form>




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

