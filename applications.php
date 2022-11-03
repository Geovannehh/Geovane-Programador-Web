<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    Ola Mundo

    <?php
    echo "Ola Mundo"<br>;
    $numero="Isso é string";
    $num_int=10;
    $num_real=2.3;
    
    echo"o que e isso? $texto<br>";
    echo"o que isso?".$texto."<br>";
    echo $num_int+$num_real;

$x=5;
$y=11;
function minhaFuncao(){
    global $x; static
    $y=10;
    echo"a variavel x é $x dentro da funcao<br>";
    echo $y
    $y++
    }
    minhaFuncao();
    echo "a variavel x é $x fora da funcao";


    ?>
</body>
</html>