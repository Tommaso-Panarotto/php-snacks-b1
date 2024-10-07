<?php
require_once __DIR__ . "../function/function.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack4</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Style-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="vote pt-5">
                <form class="text-center" action="index.php" method="GET">
                    <div class="mb-3">
                        <label for="palindrome" class="form-label">Palindrome</label>
                        <input type="text" class="form-control" id="palindrome" name="Palindrome" placeholder="Inserisci per verificare se palindroma">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    <button type="submit" class="btn btn-primary btn-warning mt-3">Reset</button>
                </form>
            </div>
        </div>
        <div class="result">
            <h2>Hai inserito: <?= isset($_GET["Palindrome"]) ? $_GET["Palindrome"] : "non hai inserito ancora nessuna parola"; ?></h2>
            <div class="true"></div>
            <div class="false"></div>
        </div>
    </main>
</body>

</html>