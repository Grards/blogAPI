<?php 
    require_once __DIR__ . '/app/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // define('VIEWS_FILE', dirname(__FILE__) . "/app/views");
    // define('VIEWS_LINK', ROOT . "/app/views");
    // define('IMG_LINK', ROOT. "/public/img");

    require_once __DIR__ . '/app/routes/routes.php';

    // session_start();

  




    // define('APP', dirname(__FILE__) . "/app/");

    // $base = "";

    // if(isset($_GET) && !empty($_GET)){
    //     $route = $_GET['route'];
    //     var_dump($route);
    //     $routeParts = explode('/', $route);
    //     $base = $routeParts[0];
    //     var_dump($base);
    // }


    // if($base == ""){
    //     $base = 'home';
    // }

    // $ctrl = APP."controllers/".$base.".php";

    // if(file_exists($ctrl)){
    //     require_once $ctrl;
    // }else{
    //     require_once APP."views/404.php";
    // }


    // if (!isset($_SESSION["isConnected"]) || $_SESSION["isConnected"] != 1) {
    //     if ($base != 'user') {
    //         if ($base == 'signup') {
    //             require_once APP . 'controllers/signupController.php';
    //         } else {
    //             require_once APP . 'controllers/loginController.php';
    //         }
    //     } else {
    //         $ctrl = APP . 'controllers/' . $base . 'controller.php';
    //         if (file_exists($ctrl)) {
    //             require_once($ctrl);
    //         } else {
    //             require_once(APP . 'views/404.php');
    //         }
    //     }
    // } else {
    //     if ($base == '') {
    //         $base = 'Home';
    //     }
    //     // var_dump($base);
    //     $ctrl = APP . 'controllers/' . $base . 'controller.php';
    //     // var_dump($ctrl);
    //     if (file_exists($ctrl)) {
    //         require_once($ctrl);
    //     } else {
    //         require_once(APP . 'views/404.php');
    //     }
    // }

    ?>