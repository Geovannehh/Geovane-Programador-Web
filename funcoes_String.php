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
    $texto="Hello Word";

    echo strlen($texto);//retoena o tamanho da string
    echo "<br>";
    echo str_word_count($texto);// retorna contagem de palavras
    echo "<br>";
    echo atrrev($texto);//inverter a string
    echo "<br>";
    echo strpros($texto,"world");//retorna a posicao de uma substring
    echo "<br>";
    echo str_replace("Hello","Olá",$texto);//substitui uma string por outra
    echo "<hr>";

    $numero=10;
    echo is_int($numero);
    echo"<br>";
    $numero="Dez";
    echo is_string($numero);
    $numero="2.8";
    echo is_nan($numero);

    $numero=2.8;
    echo $numero;
    echo"<br>"
    echo (int)$numero;
    echo"<hr>"


    echo pi();//retorna o valor de pi
    echo "<br>";
    echo min(0,25,2);//retorna o menor valor e tem o oposto max()
    echo "<br>";
    echo abs(-12321);//retorna o valor absoluto
    echo"<br>";
    echo sqrt(64);//retorna o valor da raiz quadrada
    echo "<br>";
    echo round(0.8);//arredonda o valor
    echo "<br>";
    echo rand();//gera numero aleatorio
    //pode ser configurados limites rand(menor,maior)
    echo "<hr>";
    define("PI",3.14)
    echo PI;
    echo "<hr>";
    //aritmeticos
    //+ adicao, - subtracao, *multiplicacao, / divisao, % modulo ou resto, ** exponenciacao
    //comparativos
    //== igual, ===identico(valo e tipo), != diferente <>
    //>= maior igual, <= menor igual
    //logicos
    //and && e
    //para ser obrigado a votor vc tem que ter mais de 18 e menos de 70
    //pessoas com 50 anos...testes: 50>18 T E 50<70 T, logo obrigado a votar T
    //pessoas com 50 anos...testes: 50>18 T E 50<70 T, logo obrigado a votar T
    //pessoas com 50 anos...testes: 50>18 T E 50<70 T, logo obrigado a votar T
    //pessoas com 50 anos...testes: 50>18 T E 50<70 T, logo obrigado a votar T
    //pessoas com 50 anos...testes: 50>18 T E 50<70 T, logo obrigado a votar T
    ?>
</body>
</html>