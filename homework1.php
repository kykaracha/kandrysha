
?PHP
$x = rand(0,100);
echo "Число ".$x;
$a = 1;
$b = 1;
$c = '';

while($a < $x){
    $c = $a;
    $a = $b++;
    $b = $c;
    break;           
}
?>

<html>
<head>
<title>Дополнительное задание к лекции 1.1 «Введение в PHP»</title>
</head>
<body>

<?php
if($a > $x){
    echo 'задуманное число НЕ входит в числовой ряд';
}elseif($a = $x){
    echo 'задуманное число входит в числовой ряд';
}

?>
</body>
</html>
