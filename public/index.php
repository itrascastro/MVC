<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

chdir(dirname(__DIR__));

require 'application/controllers/IndexController.php';
require 'application/controllers/CalculatorController.php';
require 'application/models/CalculatorModel.php';

if (!isset($_GET['controller']))
{
    $controllerName = 'controllers\\IndexController';
    $action         = 'indexAction';

    $controller = new $controllerName();
    $controller->$action();
}
else
{
    $controllerName     = 'controllers\\' . ucfirst($_GET['controller']) . 'Controller';
    $action             = $_GET['action'] . 'Action';

    // Dependeny
    $model = new models\CalculatorModel();

    //Dependency Inyection
    $controller = new $controllerName($model);
    $controller->$action();
}



