<?php

namespace Admin\Model\Page;

use Engine\Model;

class PageRepository extends Model
{
  public function getPages()
  {
    $sql = $this->queryBuilder->select()
        ->from('page')
        ->orderBy('id', 'DESC')
        ->sql();

    return $this->db->query($sql);
  }

  public function getPageData($id)
  {
    $page = new Page($id);

    return $page->findOne();
  }

  public function createPage($data)
  {
    $page = new Page;
    $page->setTitle($data['title']);
    $page->setContent($data['content']);
    $pageId = $page->save();

    return $pageId;
  }

  public function updatePage($data)
  {
    if (isset($data['page_id'])) {
      $page = new Page($data['page_id']);
      $page->setTitle($data['title']);
      $page->setContent($data['content']);
      $page->save();
    }
  }

}