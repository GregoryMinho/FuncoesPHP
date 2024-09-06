<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 1</title>
</head>

<body>
    <main>
        <h1>Conversão de Temperaturas</h1>
        
        <form action="" method="post">
        
            <label for="FFtemperatura">Insira a temperatura:</label>
            <input type="number" id="FFtemperatura" name="FFtemperatura" value="<?= $celsius ?>" required>
            <button type="submit">Enviar</button>
        </form>

        <?php       
        $temperatura = $_POST['FFtemperatura'];
        function resultado($temperatura)
        {
            $celsius = (($temperatura - 32) / 1.8);
            return $celsius;
        }

        echo "Resultado: " . resultado($temperatura);

        ?>

    </main>
</body>

</html>