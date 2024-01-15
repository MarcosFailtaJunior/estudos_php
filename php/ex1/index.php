<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex1/estilos/style.css">
    <title>Formulários</title>

</head>
<body>
    <header>
        <h1>Cadastro</h1>
    </header>
    <section>
        <form action="cad.php" method="post">

            <label for="nome" id="label_nome" class="username">Nome</label>
            <input type="text" name="nome" id="box_nome" class="username" required>

            <label for="sobrenome" id="label_sobrenome" class="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="box_sobrenome" class="sobrenome" required>

            <input type="submit" value="Enviar" id="buttonEnviar" class="sobrenome">
            <input type="reset" value="Reset" id="buttonReset">

        </form>
    </section>
</body>
</html>