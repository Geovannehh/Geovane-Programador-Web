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
             $idade;=25;
                if($idade>18&& $idade<70){
                echo "VOTO OBRIGATORIO":
                }else{
                 echo "VOTO OPCIONAL";
                }
                if($idade>||$nome=="Maria"){
                echo "ENTRA NO CLUBE";
                }else{
                echo "NAO VOTA";
                }
                echo"NR"
                if($idade>18||$nome=="Maria"){
                    echo "ENTRA NO CLUBE"
                }else{
                    echo "NAO ENTRA"
                }
            $corFav="vermelho";
                switch($corFav){
                    case"vermelho":
                        echo "Cor favorita é vermelho";
                        break;
                    case"azul":
                        echo "Cor Favorita é Azul";
                        break;
                    default:
                    echo "Opcao Invalida";
                    }
                    echo "<br>"
            $contador=0;
                while($contador<10){
                    echo "Sou menor que dez, meu valor é $contador <br>";
                    $contador++;
                }
                do{
                    echo "Sou menor que dez, meu valor é $contador <br>"
                    $contador++;
                }while($contador<10);

                echo"$contador <br>";
                for($i=0;$i<10;$i++){
                    echo "Sou menor que dez, meu valor é $i <br>";
                }
            $cores=array("vermelho","azul","verde","amarelo");
                foreach($cres as $cor){
                     echo "$cor<br>";

                
                }
            

    ?>
</body>
</html>