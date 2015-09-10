<?php
setcookie("emailUser","",time());
header("location:index.php");


//Formas de vaciar cookie
//setcookie("emailUser","",time()-3600);
//unset($_COOKIE["emailUser"]);
//setcookie(emailUser);