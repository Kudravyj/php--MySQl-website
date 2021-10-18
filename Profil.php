<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Neaty HTML Web Template</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="css/bootstrap.min.css">                                     
    <link rel="stylesheet" href="css/magnific-popup.css">                              
    <link rel="stylesheet" href="css/templatemo-style.css">                  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                    <!-- Left column: logo and menu -->
                    <div class="tm-blue-bg tm-left-column">                        
                        <div class="tm-logo-div text-xs-center">
                            <img src="img/tm-neaty-logo.png" alt="Logo">
                            <h1 class="tm-site-name">Neaty</h1>
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                <li class="tm-nav-item">
                                    <a href="/index.html" class="tm-nav-item-link">Welcome</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="/index.html" class="tm-nav-item-link">About Us</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="/index.html" class="tm-nav-item-link">Gallery One</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="/index.html" class="tm-nav-item-link">Second Gallery</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="/index.html" class="tm-nav-item-link">Third Gallery</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href='/Profil.php'>Sign/Login</a>
                                </li>
                            </ul>
                        </nav>                                         
                    </div> 
    
            <?php
                if($_COOKIE['user'] == ''):
            ?>
            <div class="tm-right-column">
                <div class="tm-content-div">
                    <section id="contact" class="tm-section">
                        <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Login</h2></header>

                        <div class="row">
                            <div class="col-lg-6">
                                <form action="php/aut.php" method="post" class="contact-form">
                                        <div class="form-group">
                                            <input type="text" id="contact_name" name="email" class="form-control" placeholder="Name"  required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="pass" id="contact_email" name="fio" class="form-control" placeholder="Password"  required/>
                                        </div>                                         
                                        <button type="submit" class="float-right tm-button">Send</button>
                                        <a href="/Register.php" class="tm-button tm-button-wide">Register</a>  
                                </form>
                            </div>
                        </div>
                    </section>
                </div>        
            </div>
            <?php else:?>
                <div class="tm-right-column">

                        <div class="tm-content-div">
                            <p>Привет <?=$_COOKIE['user']?>. Я очень рада, что ты с нами. Переходи на главную страницу, чтобы посмотреть блог. Для выхода со страницы жмякни <a href='/php/exit.php'>tutaj</a></p> 
                        </div>  
                        
                </div>
            <?php endif;?> 
        <script src="js/jquery-1.11.3.min.js"></script>           
        <script src="js/jquery.magnific-popup.min.js"></script>   
        <script src="js/jquery.singlePageNav.min.js"></script>
        <script>     
        </script>   
</body>
</html>