<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
        <link type="text/css" rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
        <div id="container">
            <?php
                echo "Estrutura condicional e formulário<br><br>";
                $iNumero = $_POST["valor"];
                //if composto
                if($iNumero%2==0){
                    echo "Número PAR";
                }else{
                    echo "Número IMPAR";
                }
            ?>
        </div>
    </body>
</html>