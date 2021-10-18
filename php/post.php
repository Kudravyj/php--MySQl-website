<?php
    $email = Filter_var(trim($_POST['email']), 
    FILTER_SANITIZE_STRING);
    $fio = Filter_var(trim($_POST['fio']), 
    FILTER_SANITIZE_STRING);
    $name = Filter_var(trim($_POST['name']), 
    FILTER_SANITIZE_STRING);


    if(mb_strlen($email) < 5 || mb_strlen($email) > 20){
        echo "nedopustimo";
        Exit();
    } elseif (mb_strlen($fio) < 5 || mb_strlen($fio) > 20) {
        echo "nedopustimo";
        Exit();
    } elseif (mb_strlen($name) < 5 || mb_strlen($name) > 20) {
        echo "nedopustimo";
        Exit();
    }
    $fio = md5($fio."KTOJATOTKTOBOITSIA");
    
    $mysql = new mysqli("localhost", "root", "", "test");
    $mysql->query("INSERT INTO `users` (`Login`, `Password`, `name`)
    Values('$email', '$fio', '$name')");

    $mysql-> close();
    
    header('Location: /profil.php');