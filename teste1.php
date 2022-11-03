<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Minha primeira página em PHP</h1>
    <?php
    echo "Hello World <br>";

    ?>

<?php
$glob = 5;
// variavel global, não enxergada dentro das funções

function meuTeste(){

    $loc = 10; 
     // variavel local, não enxergada fora dessa funcao

    global $glob; 
    // usando a palavra - chave global eu consigo acessar uma variavel global 

    echo " esse eh o echo interno $loc <br>";
    echo "esse eh o echo da global dentro da funcao $glob <br>";
   
    //echo $glob;
}


meuTeste();

echo "esse eh o echo de fora da funcao $glob";
//echo "esse eh o echo da variavel local  da fora da funcao $loc";
?>

</body>