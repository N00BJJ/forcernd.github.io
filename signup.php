<? 
$title = "Регистрация";
require_once 'header.php'; 
?>

<?
// Логика регистрации
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$done = $_POST['done'];
$errors = [];

$userExist = $db->query("SELECT `login` FROM `users` WHERE `login` = '$login'")->fetch(PDO::FETCH_ASSOC);

if (isset($done) && !empty($login)) {
    if ($login == $userExist['login']) {
        // ERROR
        $errors['login'] = "Такой логин уже существует";
    }

    if (strlen($password) <= 4) {
        // ERROR
        $errors['password'] = "Длина пароля должна быть больше 4 символов";
    }

    if (empty($errors)) {
        // Регистрируем
        $password = password_hash($password, PASSWORD_DEFAULT);
        $isRegister = $db->query("INSERT INTO `users`(`name`, `login`, `password`) VALUES ('$name', '$login', '$password')");
        if($isRegister) {
            header("Location: signin.php");
        } else {
            $errors['DB'] = "Произошла ошибка, попробуйте ещё раз";
        }
    }

}
?>

<section class="signup">
    <div class="signup__wrapper">
        <div class="signup__container container">
            <div class="signup__body">
                <h2>Регистрация</h2>
                <form class="form" method="POST">
                    <label>
                       <span>Ваше ФИО:</span>
                       <input type="text" name="name" value="<?=@$name?>" required placeholder="Ваше ФИО">
                    </label>
                    <label>
                       <span>Ваш логин:</span>
                       <input type="text" name="login" value="<?=@$login?>" required placeholder="Ваш логин">
                    </label>
                    <label>
                       <span>Ваш пароль:</span>
                       <input type="password" name="password" required>
                    </label>
                    <input type="submit" name="done" value="Зарегистрироваться">
                </form>
                <? if(!empty($errors)) { ?>
                    <div class="alert alert-danger"><?=array_shift($errors)?></div>
                <? } ?>
            </div>
        </div>
    </div>
</section>

<? require_once 'footer.php'; ?>