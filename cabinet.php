<? 
$title = "Личный кабинет";
require_once 'header.php'; 

$loginUser = $_SESSION['userLogin'];


$statusUser = $db->query("SELECT `status` FROM `users` WHERE `login` = '$loginUser'")->fetch(PDO::FETCH_ASSOC);
?>



<section class="cabinet">
    <div class="cabinet__wrapper">
        <div class="cabinet__container container">
            <div class="cabinet__body">
                <h2>Личный кабинет (<?=$loginUser?>)</h2>
                <p>Добро пожаловать, в ваш кабинет, <b><?=$_SESSION['userName']?></b></p>
                <div>
                <?
                
                if ($statusUser['status'] == 1) {
                    ?>
                        <a href="/admin" target="_blank" class="logout">Админ-панель</a>
                        <a href="logout.php" class="logout">Выйти</a>
                    <?
                } else {
                    ?>
                        <a href="logout.php" class="logout">Выйти</a>
                    <?
                }
                
                ?>
                </div>
                
            </div>
        </div>
    </div>
</section>

<? require_once 'footer.php'; ?>