<!DOCTYPE html>
<html>
<head>
<title>
 Interactive API Test Client 
</title>
</head>
<body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js" type="text/javascript"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.2/backbone-min.js" type="text/javascript"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/backbone-localstorage.js/1.0/backbone.localStorage-min.js" type="text/javascript"></script>
  
<!-- Styles -->
<style type="text/css">
.marketing {
  margin: 40px 0;
}

.marketing p + h4 {
  margin-top: 28px;
}
</style>


<div id ="search-container" class="container">
<input class="form-control" placeholder="charity name or cause" id ="search" type="text"/>
<button class="btn btn-lg" id ="searchButton" type="submit">Search</>
</div>
<div id="search-result-container" class="container">
<div id="load-more"></div>
</div>

<div>
</div>
<script type="text/javascript" src="js/main.js"></script>
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

</body>
</html>