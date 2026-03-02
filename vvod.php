<?php


if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
      
    $conn = mysqli_connect('localhost' , 'root' , '', 'abibas');
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $tel = mysqli_real_escape_string($conn, $_POST["phone"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $query = "INSERT INTO `technicalsupport` (`id`, `name`, `email`, `telephone`, `description`) VALUES (NULL, '$name', '$email', '$tel', '$message');";
        if(mysqli_query($conn, $query)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    header("Location: support.php");
}





?>







<!-- INSERT INTO `technicalsupport` (`id`, `name`, `email`, `telephone`, `description`) VALUES (NULL, 'Кукушкин', 'куку@mail.ru', '792665650214', 'шоыфвашоывашовыа'); -->