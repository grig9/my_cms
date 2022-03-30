<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
  public function index()
  {
    echo 'Index Page HomeController<br>';
  }

  public function news($id = null)
  {
    echo "News Page HomeController<br>";
    echo "id = ". $id;
  }
}