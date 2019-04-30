<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#container{
			width: 500px;
			height: 500px;
			background-image: url("<?php echo htmlspecialchars($_GET['bg']) ?>");
		}
	</style>
</head>
	<h5>enter background link</h5>
	<form>
		<input type="text" name="bg">
		<input type="submit">
	</form>
<body>

<div id="container">
</div>

</body>
</html>
<?php
echo $_GET['page'];
?>

<!-- exploitation -->
<!-- http://localhost/css_injection/?bg=http://localhost/css_injection/basic_auth.php -->
<!-- http://localhost/css_injection/?bg=http://localhost/css_injection/any.png -->