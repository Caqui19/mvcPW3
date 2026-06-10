<?php
require_once 'model.php';
require_once 'view.php';
require_once 'controller.php';

$model = new Model();
$view = new View($model);
$controller = new Controller($model);

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'somar':
            $controller->somar();
            break;
        case 'subtrair':
            $controller->subtrair();
            break; 
        case 'multiplicar':
            $controller->multiplicar();
            break;
        case 'dividir':
            $controller->dividir();
            break; 
    }
}

echo $view->output();
?>