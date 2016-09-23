<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

$curpage ='index.php';


/*The include statement includes and evaluates the specified file.*/
include 'menu.php';
?>

<h1> Home</h1>
<p>page 1</p>

<?php
/*require function takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.*/
require 'footer.php';
?>
</body>
</html>