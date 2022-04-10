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
    $pageModel = $this->load->model('Page');

    $params = $this->request->post;

    if (isset($params['title'])) {
      $pageId = $pageModel->repository->createPage($params);

      echo $pageId;
    }

    //redirect
    // header('Location: /admin/pages/');
    // exit;
  }
}