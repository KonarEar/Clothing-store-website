<?php   

if(isset($_POST["id"]))
{
    $conn = mysqli_connect('localhost' , 'root' , '', 'abibas');
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $userid = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "DELETE FROM prod WHERE id = '$userid'";
    if(mysqli_query($conn, $sql)){
         
        header("Location: korzina.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);    
}

?>