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
       $meu_arquivo=fopen("webdicio.txt", "r")
              or die("Incapaz de ler o arquivo");
        echo readfile("webdicio.txt");
        fclose($meu_arquivo);
        
        
        $meu_arquivo=fopen("webdicio.txt", "w")
             or die("Incapaz de ler o arquivo");
        fwrite($meu_arquivo, "apagou\n");
            fclose($meu_arquivo);

         $meu_arquivo=fopen("webdicio.txt", "a")
             or die("Incapaz de ler o arquivo");
        fwrite($meu_arquivo, "Continua\n");
            fclose($meu_arquivo);
        $novo_arquivo=fopen("novo_arquivo.txt", "x");
    ?>
</body>
</html>