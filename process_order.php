<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cost = $_POST['cost'];
    $login = $_SESSION['login'];

    $user_query = "SELECT id FROM users WHERE login = '$login'";
    $user_result = mysqli_query($link, $user_query);
    // $user_row = mysqli_fetch_assoc($user_result);
    // $user_id = $user_row['id'] ? '' : 8;
    $user_id = $user_row['id'];
    $user_id = 

$user_id = $_SESSION['login'];
$user_id = $login ? '' : 8;

if ($login) {

 $connection = mysqli_connect('localhost', 'root', '', 'abibas');

        $query = "SELECT * FROM users WHERE login = '$login'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $user_id = $row['id'];
        } 
    }    

    $goods_list = array();
    $sql = "SELECT p.name
            FROM products p
            JOIN prod pr ON p.id = pr.name_in_php
            WHERE pr.login = '$user_id'";
    $result = mysqli_query($link, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $goods_list[] = $row['name'];
        }

        if (count($goods_list) < 1) {
            header("Location: korzina.php?error=empty_cart");
            exit();
        } else {
            $goods = implode(', ', $goods_list);

            $insert_sql = "INSERT INTO orders (address, phone, goods, cost, user_login) VALUES ('$address', '$phone', '$goods', '$cost', '$user_id')";

            if (mysqli_query($link, $insert_sql)) {
                $delete_sql = "DELETE FROM prod WHERE `login` = $user_id;";
                if (!mysqli_query($link, $delete_sql)) {
                    header("Location: korzina.php?error=delete_error");
                    exit();
                } else {
                    header("Location: korzina.php?success=order_placed");
                    exit();
                }
            } else {
                header("Location: korzina.php?error=order_error");
                exit();
            }
        }
    }
}
?>