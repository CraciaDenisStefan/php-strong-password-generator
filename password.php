<?php
session_start();

include __DIR__. "/function.php";

if (isset($_GET['length']) && $_GET['length'] !== '') {
    $passwordLength =trim($_GET['length']);
    $_SESSION['password'] = generatePassword($passwordLength);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg-danger-subtle">
    <div class="container">
    <h2 class="mt-5">La tua password :</h2>
    <h4 class="my-5 border border-danger-subtle rounded p-3 bg-success text-white"><?php if (isset($_GET['length']) && $_GET['length'] !== '') echo $_SESSION['password'] ?></h4>
    <a href="./index.php" class="btn btn-primary " tabindex="-1" role="button">Torna indietro</a>
    </div>
    
   
</body>
</html>