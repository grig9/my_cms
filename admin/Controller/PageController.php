<?php

namespace Admin\Controller;

class PageController extends AdminController
{ 
  public function listing()
  {
    $pageModel = $this->load->model('Page');

    $pages = $pageModel->repository->getPages();

    $this->view->render('pages/list', ['pages' => $pages]);
  }

  public function create()
  {
    $pageModel = $this->load->model('Page');

    $this->view->render('pages/create');
  }
}