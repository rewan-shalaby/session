<?php
session_start();

// echo session_id()."<br>";

if (isset($_SESSION['page_count']))
$_SESSION['page_count']+=1;
else
$_SESSION['page_count']=1;

echo "you visted " .$_SESSION['page_count']." times"."<br>";

if ($_SESSION['page_count']>5)
echo "<p style='color:blue'>you are unique user</p>";

$_SESSION['country']='egypt';
$_SESSION['coin']='pound';

// unset($_SESSION['country']);
// session_destroy();
// $id=$_SESSION['PHPSESSID'];

setcookie('PHPSESSID',"",time()-1000,'/');
session_regenerate_id();


echo"<pre>";
var_dump($_SESSION);
echo"</pre>";

setcookie('name','roro',time()+30);
setcookie('gender','female',time()+30);

if (isset($_COOKIE['name']))
echo "hi" ." ". $_COOKIE["name"]. "<br/>";
else
echo " not recognized";

setcookie('name','rewan');

echo"<pre>";
var_dump($_COOKIE);
echo"</pre>";

setcookie('gender','female',time()-1);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<div style="padding-left:16px">
  <h2>Our Drinks</h2>
  <?php
  require 'content.php';
  ?>
</div>

</body>
</html>
