<?php

namespace Engine;

use Engine\Core\Router\DispatchedRoute;
use Engine\Helper\Common;
use Engine\DI\DI;

class Cms
{
  /**
   *  @var DI
   */
  private $di;

  public $db;

  public $router;

  /**
   * Cms constructor
   * @param \Engine\DI\DI $di
   */
  public function __construct(DI $di)
  {
    $this->di = $di;

    $this->router = $this->di->get('router'); // получаем доступ к объекту Router, с помощью ключа 'router'
  }

  /**
   * Run cms
   */
  public function run()
  {
    try {

      require_once __DIR__ . '/../'. mb_strtolower(ENV) . '/Route.php';

      $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

      if ($routerDispatch == null) {
        $routerDispatch = new DispatchedRoute('ErrorController:page404');
      }
      // list - используется для присвоения значений списку переменных в одной операции.
      list($class, $action) = explode(':', $routerDispatch->getController(), 2); // explode($separator, $string)  разбивает строку с помощью разделителя

      $controller = '\\' . ENV . '\\Controller\\' . $class;
      $parameters = $routerDispatch->getParameters();

      call_user_func_array([new $controller($this->di), $action], $parameters);

    } catch(\Exception $e) {

      echo $e->getMessage();
      exit;
    }
  }
}
