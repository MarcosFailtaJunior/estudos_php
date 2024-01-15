<!DOCTYPE html>
<html lang="pt-b">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>

</head>
<body>
    <header>

    </header>
    <main>
        <?php 
            $numero_inserido = $_GET["numero_user"];

            echo "<p>o número inserido foi $numero_inserido</p>";
            echo "<p>o seu antecessor é ", ($numero_inserido-1);
            echo "<p> seu sucessor é ",($numero_inserido+1);
        ?>

        

    </main>

</body>
</html>