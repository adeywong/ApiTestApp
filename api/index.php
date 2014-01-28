<?php


require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->post('/exports', 'postExport');
$app->get('/exports/:id', 'getExport');
$app->get('/', 'helloWorld');
$app->run();

function postExport()
{
	$request = \Slim\Slim::getInstance()->request();
	$body = $request->getBody();
	
	echo $body;
	
	/*$url= 'https://bla/';
	$fields = array('a'=>'a');
	$curl = curl_init();
	$data = array('fields'=>$fields);

	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	
	curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    //Return the response as a string instead of outputting it to the screen
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    return curl_exec($curl);	
	*/
	
}

function getExport($id)
{
	echo "test";
}

function helloWorld()
{
	echo 'hello world';
}
?>