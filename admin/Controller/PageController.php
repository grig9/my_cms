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

    var_dump($params);
    exit;

    // $pageId = $pageModel->repository->createPage($params);

    // echo $pageId;
    // d($params);
    // if (isset($params['tittle'])) {
    //   $pageId = $pageModel->repository->createPage($params);

    //   echo $pageId;
    // }

    //redirect
    // header('Location: /admin/pages/');
    // exit;
  }
}