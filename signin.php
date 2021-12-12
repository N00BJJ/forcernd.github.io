<? 
$title = "Авторизация";
require_once 'header.php'; 
?>

<?

    $login = $_POST['login'];
    $password = $_POST['password'];
    $done = $_POST['done'];

    $errors = [];

    // Существующий пользователь
    $userExist = $db->query("SELECT `login`, `password`, `name` FROM `users` WHERE `login` = '$login'")->fetch(PDO::FETCH_ASSOC);


    if(isset($done) && !empty($login)) {

        if (!empty($userExist['login'])) {
            // Проверяем дальше
            if (password_verify($password, $userExist['password'])) {
                $_SESSION['userLogin'] = $login;
                $_SESSION['userName'] = $userExist['name'];
                header("Location: cabinet.php");
            } else {
                $errors['badPassword'] = "Пароль неверный";
            }
        } else {
            $errors['notUser'] = "Такого пользователя не существует";
        }
        // Проверять пароль на соответситвие логину
    }

?>

<section class="signin">
    <div class="signin__wrapper">
        <div class="signin__container container">
            <div class="signin__body">
                <h2>Авторизация</h2>
                <form class="form" method="POST">
                    <label>
                       <span>Ваш логин:</span>
                       <input type="text" name="login" value="<?=@$login?>" required placeholder="Ваш логин">
                    </label>
                    <br>
                    <label>
                       <span>Ваш пароль:</span>
                       <input type="password" name="password" required>
                    </label>
                    <input type="submit" name="done" value="Войти">
                </form>
                <? if(!empty($errors)) { ?>
                    <div class="alert alert-danger"><?=array_shift($errors)?></div>
                <? } ?>
            </div>
        </div>
    </div>
</section>


<? require_once 'footer.php'; ?>