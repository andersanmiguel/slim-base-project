<?php
require '../vendor/autoload.php';

require '../app/config.php';

$app = new \Slim\Slim(array(
  'view' => 'View',
  'templates.path' => '../app/views'
));

require '../app/conf/post-conf.php';
require '../app/routes.php';

$app->run();
