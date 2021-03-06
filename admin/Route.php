<?php
/**
 * List routes
 */

$this->router->add('login', '/admin/login/', 'LoginController:form');
$this->router->add('auth-admin', '/admin/auth/', 'LoginController:authAdmin', 'POST');
$this->router->add('dashboard', '/admin/', 'DashboardController:index');
$this->router->add('logout', '/admin/logout/', 'AdminController:logout');

// Pages Routes
$this->router->add('pages', '/admin/pages/', 'PageController:listing');
$this->router->add('pages-create', '/admin/pages/create/', 'PageController:create');
$this->router->add('page-edit', '/admin/page/edit/(id:int)', 'PageController:edit');
$this->router->add('page-add', '/admin/page/add/', 'PageController:add', 'POST');
$this->router->add('page-update', '/admin/page/update/', 'PageController:update', 'POST');

// Posts Routes
$this->router->add('posts', '/admin/posts/', 'PostController:listing');
$this->router->add('posts-create', '/admin/posts/create/', 'PostController:create');
$this->router->add('post-edit', '/admin/post/edit/(id:int)', 'PostController:edit');
$this->router->add('post-add', '/admin/post/add/', 'PostController:add', 'POST');
$this->router->add('post-update', '/admin/post/update/', 'PostController:update', 'POST');

// Setting Routes (GET)
$this->router->add('settings-general', '/admin/settings/general/', 'SettingController:general');
$this->router->add('settings-update', '/admin/settings/update/', 'SettingController:updateSetting', 'POST');