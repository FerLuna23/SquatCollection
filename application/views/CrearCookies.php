<?php
setcookie('Cookies',$_GET['home'], time()+86400, '/');
header('Location: Home.php')
?>