<?php 

    if (isset($_POST["btnGravar"]))
    {
        //echo "botão carregado";

        $numero1 = $_POST["txtNumero1"];
        $numero2 = $_POST["txtNumero2"];

        //echo "numero 1 = " . $numero1;
        //echo "numero 2 = " . $numero2;  

        $soma = $numero1 + $numero2;

        echo "Resultado = " . $soma;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <form method="POST">

        <label>Numero 1</label>
        <input name="txtNumero1" type="text" />

        <label>Numero 2</label>
        <input name="txtNumero2" type="text" />

        <input type="submit" name="btnGravar" 
            value="Gravar" />

    </form>
</body>
</html>