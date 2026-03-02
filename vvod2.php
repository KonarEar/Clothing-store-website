<?php

include_once 'MySqlPDO.php';
include_once 'db.php';



session_start();

$login = $_SESSION['login'];
if ($login) {

 $connection = mysqli_connect('localhost', 'root', '', 'abibas');

        $query = "SELECT * FROM users WHERE login = '$login'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $id = $row['id'];
            
            if(isset($_POST["product_id"])) {
                $conn = mysqli_connect('localhost', 'root', '', 'abibas');
                $product_id = $_POST["product_id"]; 
            
            
                $query = "INSERT INTO `prod` (`id`, `name_in_php`,`login`) VALUES (NULL, '$product_id','$id')";
            
                if($conn && mysqli_query($conn, $query)) {
                    echo "Данные успешно добавлены";
                } else {
                    echo "Ошибка при добавлении данных: " . mysqli_error($conn);
                } 
                // header("Location: men.php");

                //
                    $categorypeople = $_POST["category_of_people"];
                    if($categorypeople == 'man'){
                        header("Location: men.php");
                    } else if($categorypeople == 'woman'){
                        header("Location: woman.php");
                    }else{
                        header("Location: kid.php");
                    }
                //

            }
              
            session_start();

        
        }

} else{

    if(isset($_POST["product_id"])) {
        $conn = mysqli_connect('localhost', 'root', '', 'abibas');
        $product_id = $_POST["product_id"]; 
    
    
        $query = "INSERT INTO `prod` (`id`, `name_in_php`,`login`) VALUES (NULL, '$product_id', '8')";
    
        if($conn && mysqli_query($conn, $query)) {
            echo "Данные успешно добавлены";
        } else {
            echo "Ошибка при добавлении данных: " . mysqli_error($conn);
        } 
        // header("Location: men.php");

         //
         $categorypeople = $_POST["category_of_people"];
         if($categorypeople == 'man'){
             header("Location: men.php");
         } else if($categorypeople == 'woman'){
             header("Location: woman.php");
         }else{
             header("Location: kid.php");
         }
        //

    }

    
}






// if(isset($_POST["product_id"])) {
//     $conn = mysqli_connect('localhost', 'root', '', 'abibas');
//     $product_id = $_POST["product_id"]; // Получаем значение product_id из $_POST


//     $query = "INSERT INTO `prod` (`id`, `name_in_php`, `login`) VALUES (NULL, '$product_id','asd')";

//     if($conn && mysqli_query($conn, $query)) {
//         echo "Данные успешно добавлены";
//     } else {
//         echo "Ошибка при добавлении данных: " . mysqli_error($conn);
//     } 
//     header("Location: men.php");
// }





// session_start();


// $login = $_SESSION['login'];
// if ($login) {
//     if ($login == 'Гость') {

//         if(isset($_POST["product_id"])) {
//             $conn = mysqli_connect('localhost', 'root', '', 'abibas');
//             $product_id = $_POST["product_id"]; // Получаем значение product_id из $_POST
        
        
//             $query = "INSERT INTO `prod` (`id`, `name_in_php`,`login`) VALUES (NULL, '$product_id', NULL)";
        
//             if($conn && mysqli_query($conn, $query)) {
//                 echo "Данные успешно добавлены";
//             } else {
//                 echo "Ошибка при добавлении данных: " . mysqli_error($conn);
//             } 
//             header("Location: men.php");
//         }
      
//     } else { 

//         $connection = mysqli_connect('localhost', 'root', '', 'abibas');

//         // Запрос к базе данных для получения данных о пользователе
//         $query = "SELECT * FROM users WHERE login = '$login'";
//         $result = mysqli_query($connection, $query);
//         $row = mysqli_fetch_assoc($result);

//         if ($row) {
//             $id = $row['id'];
            
//             if(isset($_POST["product_id"])) {
//                 $conn = mysqli_connect('localhost', 'root', '', 'abibas');
//                 $product_id = $_POST["product_id"]; // Получаем значение product_id из $_POST
            
            
//                 $query = "INSERT INTO `prod` (`id`, `name_in_php`,`login`) VALUES (NULL, '$product_id','$id')";
            
//                 if($conn && mysqli_query($conn, $query)) {
//                     echo "Данные успешно добавлены";
//                 } else {
//                     echo "Ошибка при добавлении данных: " . mysqli_error($conn);
//                 } 
//                 header("Location: men.php");
//             }
            
            
            
            
            
//             session_start();

        
//         }}}







?>