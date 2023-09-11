<?php 

include_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">Password Generator</h1>
    <p class="text-center fs-6">Contiene: 2 caratteri speciali, 2, numeri, una lettera maiuscola e una serie di lettere randomiche che dimenticherai subito</p>
    <div class="container">        <form action="" method="GET">
            <div class="mb-3">
                <label class="form-label">Inserisci il numero di caratteri:</label>
                <input name="lenght-psw" type="number" class="form-control w-25" placeholder="Inserisci il numero di caratteri">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <h4 class="mt-5">La tua password è: <span> <?php echo getRandomPass($passwordlength)?></span></h4>
    </div>
</body>

</html>