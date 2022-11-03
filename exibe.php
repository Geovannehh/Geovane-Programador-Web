<?php 
require_once 'fruta.php';
require_once 'morango.php';
require_once 'fruta.php';
require_once 'guilherme.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$banana=new fruta('banana','amarela');
$banana->set_nome('banana');
echo $banana->get_nome();

echo "<br>";

$maca=new fruta('maca','vermelha');
$maca->set_nome('maca');
echo $maca->get_nome();

echo "<br>";

echo $maca->get_cor();

echo "<br>";

$morango=new morango('morango','vermelho',1);
echo $morango->get_nome();
echo "<br>";
echo $morango->inteiro();
echo "<br>";
echo $morango->mensagem();
ECHO "<br>";
echo fruta::AGRADECER;
echo "<br>";
$gato=new gato();
echo $gato->fazBarulho();
echo "<br>";
echo $gato->locomove();
echo "<br>"
echo ::atrapalha;


?>
</body>
</html>