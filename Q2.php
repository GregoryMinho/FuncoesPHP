<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 2</title>
</head>
<body>
    <h1>Conversão Dólar para Real</h1>
    <form action="" method="post">
        <label for="dolar">Insira um Valor:</label>
        <input type="number" id="dolar" name="dolar" value="<?= $dolar ?>" required>
        <button type="submit">Converter</button>
    </form>

    <?php
        $dolar =  $_POST['dolar'];
        function conversao($dolar): float
        {
            $real = $dolar * 5.66;
            return $real;
        }
        echo "<br>";
        echo "O valor em real é: ". (round(num: conversao(dolar: $dolar), precision: PHP_ROUND_HALF_UP)). " R$";

    ?>
</body>
</html>