<html>
<head>
<!--Name and meta tags-->

<!--Including external jQuery-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
<!--Link to CSS-->
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?
	$username = $_GET["username"];
	$password = $_GET["password"];
	
	var_dump($_GET);

	$DB_NAME = "hackathon";
	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASS = "root";
	
	$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	$mysqli->set_charset("utf8");

	$query = sprintf("SELECT username, password FROM users WHERE username='$username'");
	$result = mysql_query($query);
	
	var_dump($result);
	
	echo "alive";
 ?>
<!--These divs will be in separate php files later-->
<div id="header">
	<div id="header_logo">
		<img src="http://placehold.it/150x100&text=logo" id="header_logo_image"/>
	</div>
	<div id="header_access">
		<img src="http://placehold.it/150x100&text=login" id="header_login"/>
	</div>
</div>

<div id="main">
<h1>Connect with people at UCSC</h1>
<h3>Share your passions.</h3>
	<div id="main_login">
		asdasd
	</div>
	<div id="main_count">
		Do you need someone for your project? <br/>
		Right now we have 30 artists. 15 musicians. 45 software engineers.
	</div>
</div>

<div id="footer">
</div>

<script>
$("#header_login").click(
	function(){
		if($("#main_login").is(":visible")){
			$("#main_login").hide("slow");
		}
		else{
			$("#main_login").show("slow");		
		}
	}
);
</script>
</body>
</html>