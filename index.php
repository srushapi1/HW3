<!DOCTYPE html>

<html>

<head>

<title>Coin Flips</title>

</head>

<body>

<h4>Click Below Button to know weather Charlie ate my lunch or not</h4>

<form action="index.php" method="post">

<input style="background-color: white;color: black;border: 2px solid #4CAF50; font-size: 20px;" type="submit" name="flip" value="Click Here" />

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['flip'])){

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