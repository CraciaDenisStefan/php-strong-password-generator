<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password generate</title>
</head>
<body>
<div class="container text-white">
    <div class="text-center my-5">
        <h1 class="text-secondary">Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>
    </div>
    <div class="d-flex border justify-content-center">
    <form class="my-5" action="password.php" method="GET">
        <div class="form-group">
            <label for="length">Lunghezza della password:</label>
            <input type="number" name="length" min="6" max="32" required>
            <div class="form-group m-2">
                <button class="btn btn-primary" type="submit">invia</button>
            </div>
        </div>
        
    </form>

    
    </div>
</div>


</body>
</html>