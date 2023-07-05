<?php
if (isset($_GET['length']) && $_GET['length'] !== '') {

    $passwordLength =$_GET['length'];
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generate</title>
</head>
<body>
<form class="mb-5 " action="index.php" method="GET">
        <div class="form-group">
            <label for="length">Lunghezza della password:</label>
            <input type="number" name="length" min="8" max="32" required>
            <div class="form-group m-2">
                <button type="submit">invia</button>
            </div>
        </div>
</form>

<?php if (isset($_GET['length']) && $_GET['length'] !== '') echo $passwordLength ?>
</body>
</html>