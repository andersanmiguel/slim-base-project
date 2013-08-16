<?php
require '../vendor/autoload.php';

require '../app/config.php';

$app = new \Slim\Slim(array(
  'view' => 'View',
  'templates.path' => '../app/views',
  'templates.suffix' => 'html',
  'database_data' => $database_data
));

require '../app/routes.php';

$app->run();
