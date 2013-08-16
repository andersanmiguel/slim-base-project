<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$app = \Slim\Slim::getInstance();

$capsule = new Capsule;

$capsule->addConnection($app->config('database_data'));

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->bootEloquent();

class Model extends \Illuminate\Database\Eloquent\Model {}
