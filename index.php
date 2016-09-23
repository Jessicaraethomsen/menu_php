<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet">
</head>

<body>

<img id="logo" src="img/project-heading-bg copy.png" style="width:200px;height:40px; alt="logo" onClick="window.open('http.//www.jessicaraethomsen.dk');" />

<?php

$curpage ='index.php';


/*The include statement includes and evaluates the specified file.*/
include 'menu.php';
?>


<img id="imagephp" src="img/img_menuphp.png" style= "width:900px;height:472px; alt="php dictionary" >

<br>
	<br>		
    	<br>

<?php
/*require function takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.*/
require 'footer.php';
?>

</body>
</html>