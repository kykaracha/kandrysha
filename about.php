<?php
$name = 'Анастасия';
$age = '27';
$email = 'kandrusik_91@mail.ru';
$city = 'Астрахань';
$about = 'Люблю кофе, кошек, маму, папу и себя.';

?>

<html>
<head>
<title>Домашнее задание к лекции 1.1 "Введение в PHP"</title>
</head>
<body>
<h1>Немного обо мне...</h1>

<h2>Имя:</h2>
<h3><?php echo $name; ?></h3>

<h2>Возраст:</h2>
<h3><?php echo $age;?></h3>

<h2>e-mail:</h2>
<h3><?php echo $email;?></h3>

<h2>Город:</h2>
<h3><?php echo $city;?></h3>

<h2>О себе:</h2>
<h3><?php echo $about;?></h3>

</body>
</html>
