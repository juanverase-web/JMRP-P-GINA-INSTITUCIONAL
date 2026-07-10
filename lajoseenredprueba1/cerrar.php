session_start();
$_SESSION['tipo'] = 0;
session_unset();
session_destroy();
header("Location: index.php");