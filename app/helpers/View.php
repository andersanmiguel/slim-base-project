<?php

class View extends \Slim\View {

  function render($file, $data = null) {
    $m = new \Phly\Mustache\Mustache;
    $m->setTemplatePath('../app/views/');
    $m->setSuffix('html');
    return $m->render($file, $this->data->all());
  }
  
}
