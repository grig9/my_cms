<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
  public function index()
  {
    echo 'Index Page HomeController<br>';
    $data = ['name' => 'Alex'];

    $this->view->render('index', $data);
  }

  public function news($id)
  {
    echo "News Page HomeController<br>";
    echo "id = ". $id;
  }
}