<?php declare(strict_types=1); ?>
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
        function falaComigo($nome){
            echo "OI $nome <br>";
        }

        falaComigo("Geovane")
        $nome="Joao";
        falaComigo($nome);

        function adiciona(int $a, int $b){
            return $a+$b;
        }
        echo "<br>";
        echo adiciona(5.5);
        echo "<br>";

        function configAltura(int $alturaMin=50){
            echo "altura é:$alturaMin <br>";
        }
        configAltura(150);
        configAltura();

        function adiciona5(int $i){
            return $i=$i+5;
        }

        echo "<br>";
        $num=;
        echo "variavel num declara com valor: $num";
        echo "<br>";
        adiciona5($num);
        echo "variavel num apos adiciona 5: $num";
        echo "<br>";

        $carros=array("bmh","toyota","fusca");
        echo $carros[0];
        echo "<br>";
        echo count($carros);

        $carros[0]="bmh";

        for($i=0;$i<count($carros);$i++){
            echo "$carros[$i] <br>";

        }

        $idades=arrays("Geovane"=>"22","Joao"=>21);
        forech($idades as $chaves=>valor){
            echo "chaves=$chaves//valor=$valor <br>";
        }
        sort($carros)
        for($i=0;$i<count($carros;$i++))
        echo "$carros[$i] <br>"

        sort($idades);//ordena crescente pela chave e o contrario é krsort()
        oreach($idades as $chaves=>$valor){
            echo "chaves=$chaves//valor=$valor <br>"
        }



    ?>
</body>
</html>