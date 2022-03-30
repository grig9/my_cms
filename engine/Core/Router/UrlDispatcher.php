<?php 

namespace Engine\Core\Router;

class UrlDispatcher
{
  /**
   * @var array
   */
  private $methods = [
    'GET',
    'POST'
  ];

  /**
   * @var array
   */
  private $routes = [
    'GET'  => [],
    'POST' => []
  ];

  /**
   * @var array
   */
  private $patterns = [
    'int' => '[0-9]+',
    'str' => '[a-zA-Z\.\-_%]+',
    'any' => '[a-zA-Z0-9\.\-_%]+'
  ];

  /**
   * @param $key
   * @param $pattern
   */

  public function addPattern($key, $pattern)
  {
    $this->patterns[$key] = $pattern;
  }

  public function routes($method)
  {
    //оператор объединения с null
    return $this->routes[$method] ?? [];
  }

  public function register($method, $pattern, $controller)
  {
    $convert = $this->convertPattern($pattern);
    d($convert);
    echo '<br>';
    $this->routes[strtoupper($method)][$convert] = $controller;
  }

  private function convertPattern($pattern)
  {
    if(strpos($pattern, '(') === false) {
      return $pattern;
    }

    return preg_replace_callback('#\((\w+):(\w+)\)#', [$this, 'replacePattern'], $pattern);
  }

  private function replacePattern($matches)
  {
    return '(?<' . $matches[1] . '>'. strtr($matches[2], $this->patterns) . ')';
  }

  /**
   * @param $method
   * @param $uri
   * @return DispatchedRoute|void
   */
  public function dispatch($method, $uri)
  {
    $routes = $this->routes(strtoupper($method));

    if(array_key_exists($uri, $routes))
    {
      return new DispatchedRoute($routes[$uri]);
    }

    return $this->doDispatch($method, $uri);
  }

  /**
   * @param $method
   * @param $uri
   * @return DispatchedRoute
   */
  private function doDispatch($method, $uri)
  {
    foreach($this->routes($method) as $route => $controller)
    {
      $pattern = '#^' . $route . '$#s';
      d($pattern);

      if(preg_match($pattern, $uri, $parameters))
      {
        d($parameters);
        return new DispatchedRoute($controller, $parameters);
      }
    }
  }

}
