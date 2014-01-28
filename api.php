<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

#setup routes
$app->get('/export/:id',  'getExport');
$app->post('/export/',  'postExport');


function getExport($id)
{
  echo 1;
}

function postExport()
{
	$request = Slim::getInstance()->request();
    $wine = json_decode($request->getBody());
}

$app->run();

?>