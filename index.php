<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="" method="post" >
        <label for="numero1">Numero 1</label>
        <input type="text" name="numero1" required>
        <br><br>
        <label for="numero2">Numero 2</label>
        <input type="text" name="numero2" required>
        <br><br>
        <label for="operacao">Operação:</label>
            <select name="operacao" id="operacao">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="dividir">Dividir</option>
            <option value="multipicar">multilicar</option>
            </select>
            <input type="submit" value="Calculadora">
    </form>
        

</body>
</html>