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
            ?>
            <form method="post" action="exemplo25.php">
                <label>Digite um número de 1 a 100:</label>
                <input type="number" name="valor" min=1 max=100><br>
                <input type="submit" value="Exibir">
            </form>
        </div>
    </body>
</html>