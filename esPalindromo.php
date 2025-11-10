<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>
<body>
    <h1>Palindromo</h1>
    <form action="" method="POST">
        <label for="palabra">Introduce una palabra</label>
        <input type="text" name="palabra">
        <input type="submit" name="consultar" value="Consultar">
    </form>
    <?php require_once "funcionPalindromo.php";?>
    <?php $palabra = $_POST["palabra"] ?>
    <?php if(isset($_POST["consultar"])):?>
        <p>Palabra original: <?= $palabra?> </p>
            <?php if(esPalindromo($_POST["palabra"])):?>
                <p>Es Palindromo</p>
            <?php else: ?>
                 <p>No es Palindromo</p>
            <?php endif; ?>
    <?php endif; ?>
</body>
</html>




