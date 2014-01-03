<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<style type="text/css">
.marketing {
  margin: 40px 0;
}

.marketing p + h4 {
  margin-top: 28px;
}

</style>
<?php 
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

#setup routes!



function postExports()
{
  $request = Slim::getInstance()->request();
  $body = $request->getBody();
  $data = json_decode($body);
  
}
?>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<div id ="search-container" class="container">

<input class="form-control" placeholder="charity name or cause" id ="search" type="text"/>
<button class="btn btn-lg" id ="searchButton" type="submit">Search</>
</div>
<div id="search-result-container" class="container">
<div id="load-more"></div>
</div>

<form class="container" style="display: block;" role="form">

<div class="form-group has-success has-error">
<label for="jsonBodyInput">Json Request Body</label>
</div>
<input name="methodName" type="hidden" value="Add a Contact to the collection">
<input name="httpMethod" type="hidden" value="POST">
<input name="methodUri" type="hidden" value="/contacts">
<span>
 <p>Step 1: Create Export </p></span>
  <div>
  <table class="table table-striped table-responsive">
  <thead>
                                        <tr>
                                            <th>Parameter</th>
                                            <th>Value</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                        </tr>
                                        <tr>
                                        <td>
                                        <div class="form-group">
                                        <label for="jsonBodyInput">Json Request Body</label>
                                        </div>
                                        </td>
                                        <td>
                                        <div class="form-group">
                                        <textarea class="form-control" rows="10" id="jsonBodyInput" placeholder="Json Request Body"></textarea>
                                        </div>
                                        </td>
                                        <td>text</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                         <td><label>UserName</label></td>
                                         <td><input class="form-control" placeholder="adeline.wong@oracle.com"></td>
                                         <td>string</td>
                                         <td>API user name and password</td>
                                        </tr>
                                         <tr>
                                         <td><label>Password</label></td>
                                         <td><input type="password" class="form-control"></td>
                                         <td>string</td>
                                         <td>API user name and password</td>
                                        </tr>
                                    </thead>
                                 <tr></tr>
                                </table>
                   </div>                              
                        <input type="submit" value="Try it!">
                        <a class="clear-results" href="#" style="">Clear Results</a>
                      </form>

<script>
$(document).ready(function()
{
	var data;
	$("#searchButton").click(function()
		{
			search();
		}
	);


});
</script>
</body>
</html>