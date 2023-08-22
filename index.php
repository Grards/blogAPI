<?php 
    require_once __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // define('VIEWS_FILE', dirname(__FILE__) . "/app/views");
    // define('VIEWS_LINK', ROOT . "/app/views");
    // define('IMG_LINK', ROOT. "/public/img");

    require_once __DIR__ . '/app/routes/routes.php';
?>