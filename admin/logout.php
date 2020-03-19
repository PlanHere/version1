<?php
session_start();
session_destroy();
if (isset($_SESSION['uname'])) {
unset($_SESSION["username"]);
}
else if (isset($_SESSION['username'])) {
  unset($_SESSION["username"]);
}
header("Location: ../index.php");
exit();
?>
