<?php
    $email = Filter_var(trim($_POST['email']), 
    FILTER_SANITIZE_STRING);
    $fio = Filter_var(trim($_POST['fio']), 
    FILTER_SANITIZE_STRING);


    $fio = md5($fio."KTOJATOTKTOBOITSIA");
    
    $mysql = new mysqli("localhost", "root", "", "test");
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `Login` = '$email'  AND `Password` = '$fio' ");
    $user = $result->fetch_assoc();
    if($user == 0) {
        echo "net takogo";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600 * 24, "/");

    $mysql-> close();
    header('Location: /Profil.php');
?>