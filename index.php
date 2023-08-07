<?php 
    require __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog API</title>
</head>
<body>
    <h1>Blog API</h1>

    <?php
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    ?>
</body>
</html>