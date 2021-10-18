<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thats my site</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        if($_COOKIE['user'] == ''):
    ?>
    <div class='col'>
        <h1>Register</h1>
        <form action="/form/post.php" method='post'>
            <label for="text">логин</label><br>
            <input type="text" id='email' name='email' placeholder="pishi" required><br>
            <label for="text">пароль</label><br>
            <input type="password" id='fio' name='fio' placeholder="pishi" required><br>
            <button>регистрация</button> 
        </form>
    </div>
    <div class='col'>
        <h1>LOGIN</h1>
        <form action="/form/aut.php" method='post'>
            <label for="text">логин</label><br>
            <input type="text" id='email' name='email' placeholder="pishi" required><br>
            <label for="text">пароль</label><br>
            <input type="password" id='fio' name='fio' placeholder="pishi" required><br>
            <button>войти</button> 
        </form>
    </div>
    <?php else:?>
        <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите ссылку <a href='/form/exit.php'>tutaj</a>
        </p> 
    <?php endif;?>
</body>
</html>