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
    $this->view->render('pages/create');
  }

  public function add()
  {
    echo "asdf";exit;
    // $pageModel = $this->load->model('Page');
    // $pageModel->repository->createPage($this->request->post);

    //redirect
    // header('Location: /admin/pages/');
    // exit;
  }
}