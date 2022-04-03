<?php

namespace Admin\Controller;

use Engine\Controller;
use Engine\DI\DI;
use Engine\Core\Auth\Auth;

class LoginController extends Controller
{
  /**
   * @var Auth
   */
  protected $auth;

  /**
   * LoginController constructor.
   * @param \Engine\DI\DI $di
   */
  public function __construct(DI $di)
  {
    parent::__construct($di);

    $this->auth = new Auth();
  }

  public function form()
  {
    $this->view->render('login');
  }

  public function authAdmin()
  {
    $params = $this->request->post;

    $this->auth->authorize('asdfasdf');

    d($params);
  }
}