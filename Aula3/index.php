<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>GET</h1>
    <a href="index.php?nome=Rafael">
        Mostrar nome
    </a>

    <a href="index.php?localidade=Salvaterra">
        Mostrar localidade
    </a>

    <?php

    if (isset($_GET["nome"])){
        echo $_GET["nome"];
    }

    if (isset($_GET["localidade"])){
        echo $_GET["localidade"];
    }

    ?>

    <h1>POST</h1>

    <form method="POST">

        <label>Nome</label>
        <input type="text" name="txtNome" />

        <input type="submit" name="btnEnviar" value="Enviar" />
    </form>

    <?php 
        if (isset($_POST["btnEnviar"])){
            echo $_POST["txtNome"];
        }
    ?>


</body>
</html>