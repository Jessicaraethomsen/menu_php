<?php 
  $curpage = basename($_SERVER['PHP_SELF']);
  
  /*One can't use a class directly because they are on all pages, so it is better to use a conditional statement. IF statement*/  
/* basename The basename() function returns the filename from a path.*/
/*$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.*/
/*PHP_SELF	Returns the filename of the currently executing script*/
/* IF ==(equals) the php page then echo(show) the class called active */

?>

<ul>
<li> <a href="index.php"<?php if($curpage == 'index.php') {echo 'class="active"'; }?>> Home </a></li>
<li> <a href="about.php"<?php if($curpage == 'about.php') {echo 'class="active"'; }?>>  About</a></li>
<li> <a href="services.php"<?php if($curpage == 'services.php') {echo 'class="active"'; }?>> Services </a></li>
<li> <a href="blog.php"<?php if($curpage == 'blog.php') {echo 'class="active"'; }?>> Blog </a></li>
<li> <a href="contact.php"<?php if($curpage == 'contact.php') {echo 'class="active"'; }?>> Contact </a></li>
</ul>

