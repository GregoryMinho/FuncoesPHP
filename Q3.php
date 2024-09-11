<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 3</title>
</head>

<body>
    <h1>Calcular Peso</h1>
    <form action="" method="post">
        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" id="sexo" placeholder="informe seu sexo">
        <br><br>
        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" step="0.01" placeholder="informe sua altura">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
    </form>

    <?php
    $sexo = $_POST['sexo'];
    $altura = $_POST['altura'];
    function calcularPeso($sexo, $altura)
    {
        if ($sexo == "masculino" || $sexo == "Masculino" || $sexo == "MASCULINO") {
            $peso = (72.7 * $altura) - 58;
            return round($peso, 2);

        } elseif ($sexo == "feminino" || $sexo == "Feminino" || $sexo == "FEMININO") {
            $peso = (62.1 * $altura) - 44.7;
            return round($peso, 2);
        } else {
            return "Insira um  sexo válido";
        }
    }

    echo "O Peso Ideal para o Sexo $sexo com Altura de $altura é: " . calcularPeso(sexo: $sexo, altura: $altura) . " Kg";

    ?>
</body>

</html>