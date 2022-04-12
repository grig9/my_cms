<?php
/**
 * List routes
 */

$this->router->add('login', '/admin/login/', 'LoginController:form');
$this->router->add('auth-admin', '/admin/auth/', 'LoginController:authAdmin', 'POST');
$this->router->add('dashboard', '/admin/', 'DashboardController:index');
$this->router->add('logout', '/admin/logout/', 'AdminController:logout');
$this->router->add('pages', '/admin/pages/', 'PageController:listing');

$this->router->add('pages-create', '/admin/pages/create/', 'PageController:create');
$this->router->add('page-add', '/admin/page/add/', 'PageController:add', 'POST');
$this->router->add('page-edit', '/admin/page/edit/(id:int)', 'PageController:edit');
$this->router->add('page-update', '/admin/page/update/', 'PageController:update', 'POST');