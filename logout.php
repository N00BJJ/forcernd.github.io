<?

session_start();

unset($_SESSION['userLogin']);
unset($_SESSION['userName']);
header("Location: index.php");