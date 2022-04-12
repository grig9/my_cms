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

  public function edit($id)
  {
    $pageModel = $this->load->model('Page');

    $this->data['page'] = $pageModel->repository->getPageData($id);

    $this->view->render('pages/edit', $this->data);
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

  public function update()
  {
    $pageModel = $this->load->model('Page');

    $params = $this->request->post;
    
    if (isset($params['title'])) {
      $pageId = $pageModel->repository->updatePage($params);

      echo $pageId;
    }
  }
}