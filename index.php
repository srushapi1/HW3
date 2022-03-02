<!DOCTYPE html>
 
<html>
 
<head>
 
 
<title>Coin Flips</title>
 
</head>
 
<body>
 
<h4>Click Below Button to know weather Charlie ate my lunch or not</h4>
 
<a href="https://codd.cs.gsu.edu/~srushapi1/WP/HW/HW3/index.php">Click here</a>
 
<?php
 
{
 
if(isBitten())
 
{
 
echo "<h1>Charlie ate my lunch!</h1>";
 
}
 
else
 
{
 
echo "<h1>Charlie did not eat my lunch!</h1>";
 
}
 
}
 
function isBitten(){
 
$flip = rand(0,1);
 
if ($flip){
 
return true;
 
}
 
else {
 
return false;
 
}
 
}
 
?>
 
<pre>
 
</pre>
 
</body>
 
</html>
