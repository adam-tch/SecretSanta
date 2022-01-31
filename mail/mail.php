<?php

$recipient = "krekiadam@gmail.com";
$siteName = "SecretSanta";

$name = trim($_POST["name"]);
$lastName = trim($_POST["lastName"]);
$wishes = trim($_POST["wishes"]);
$message = "Ім'я: $name \nПрізвище: $lastName \nСписок побажань: $wishes";

$pagetitle = "Заявка з сайту \"$siteName\"";
mail($recipient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recipient");

?>