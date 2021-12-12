<? 
$title = "Главная страница";
require_once 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$title?> </title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://unpkg.com/typeit@8.0.7/dist/index.umd.js"></script>
</head>
<body>

    <header class="header">
        <div class="header__wrapper">
            <div class="header__container container">
                <div class="header__body">
                    div
                    <a href="#" class="header__logo">FORCE</a>
                    <ul class="header__menu">
                        <li><a href="/" cla>Главная</a></li>
                        <li><a href="/products.php">Товары</a></li>
                        <li><a href="/">О нас</a></li>
                        <? 

                            if(isset($_SESSION['userLogin'])) {
                                ?>
                                <li><a href="basket.php"><img src="/css/image/cart.svg" alt="bucket" width="24px"></a></li>
                                <li><a href="cabinet.php">Личный кабинет</a></li>
                                <?
                            } else {
                                ?>
                                <li><a href="signin.php">Авторизация</a></li>
                                <li><a href="signup.php">Регистрация</a></li>
                                <?
                            }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>