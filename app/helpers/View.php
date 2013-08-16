<?php

class View extends \Slim\View {

  function render($file, $data = null) {

    $app = \Slim\Slim::getInstance();

    $m = new \Phly\Mustache\Mustache;
    $m->setTemplatePath($app->config('templates.path'));
    $m->setSuffix($app->config('templates.suffix'));
    return $m->render($file, $this->data->all());
  }
  
}
