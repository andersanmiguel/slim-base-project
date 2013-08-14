<?php

$app->get('/', function() use($app) {
  $app->render('index', array('template_data' => 'Instalación correcta'));
});

/* Resource example */
$app->group('/users', function () use ($app) {

  // index
  $app->get('/', function() {
    echo $users = User::all();
  });

  // show
  $app->get('/:id', function($id) {
    echo User::find($id);
  });

  // edit
  $app->get('/:id/edit', function($id) {
    echo 'Editing ' . $id;
  });

  // new
  $app->post('/:id', function($id) {
    echo 'Post request for ' . $id; 
  });

  // update
  $app->put('/:id', function($id) {
    echo 'Put request for ' . $id; 
  });

  // delete
  $app->delete('/:id', function($id) {
    echo 'Put request for ' . $id; 
  });

});
