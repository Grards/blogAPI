<?php
    use Bramus\Router\Router;

    require_once 'defines.php';

    echo getcwd();
    chdir('app');
    require_once './controllers/home.php';

    $home = new Home();
    $router = new Router();

    $router->get('/', [$home, 'home']);


//     $request = $_SERVER["REQUEST_URI"];
//     $requestLenght = strlen($request);
//     $path = substr($_SERVER['PHP_SELF'], $requestLenght);

//     echo '<p>$_SERVER ROOT : ' . $_SERVER['PHP_SELF'] . '</p>';
//     echo '<p>$_SERVER URI : ' . $_SERVER['REQUEST_URI'] . '</p>';
//     echo '<p>BASE URL : ' . BASE_URL . '</p>';
//     echo '<p>VIEW : ' . VIEWS_FILE . '<br>';
//     echo '<p>ROOT : ' . ROOT . '<br>';
//     echo '<p>GENERAL PATH : ' . PATH . '<br>';
//     echo '<p>PATH : ' . $path . '<br>';

//     var_dump($_SERVER);

//     switch($path){
//         case "/" :
//             require_once VIEWS_FILE . 'home.php';
//             // require_once dirname(dirname(__DIR__)) . '/app/views/home.php';
//             break;
//         case "/home" :
//             require_once VIEWS_FILE . $path;
//             break;      
//         case "/404" :
//             require_once VIEWS_FILE . $path;
//             break;       
//         default :
//             require_once VIEWS_FILE . 'home.php';
//             break;
//     }

    $router->run();
?>