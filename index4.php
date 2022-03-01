<!DOCTYPE html>

<html>

<head>

<link type='text/css' rel='stylesheet' href='style.css'/>

<title>HW03</title>

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

$count=0;

echo "<h2 style='text-align:center'>PHP program to populate a Checker board using alternating color values that are red and black.</h2>";


echo '<table style="width:300px" border="1" cellspacing="1" cellpadding="1" align="center">';

for($i=0; $i<9; $i++)

{

//create row using tr tag

echo "<tr>";

for($j=0; $j<9; $j++)

{

$count=$count+1;

if($count%2 == 0)

{

//create cell(column) with alternate color using td tag

echo '<td height="35" width="35" style="background-color:red;"></td>';

}

else

{

echo '<td height="35" width="35" style="background-color:black;>"</td>';

}

}

echo "</tr>";

}

echo "</table></html>";

function sortArray($monthArray){
    echo "After sorting using standard for loop:";
    echo "<br>";
    sort($monthArray);
    $length = count($monthArray);
    for($i = 0; $i < $length; $i++) {
         echo $monthArray[$i];
         echo "<br>";
   }
}
function sortArrayFOREACH($monthArray){
    echo "After sorting using FOREACH loop: ";
    echo "<br>";
    sort($monthArray);
    foreach($monthArray as &$value) {
         echo $value;
         echo "<br>";
   }
}
$month=array('January','February','March','April','May','June','July','August','September','October','November','December');
$length = count($month);
echo "Printing using standard for loop:";
echo "<br>";
for($i = 0; $i < $length; $i++) {
         echo $month[$i];
         echo "<br>";
}

sortArray($month);

echo "Printing using FOREACH loop:";
echo "<br>";

foreach ($month as &$value) {
  echo $value;
  echo "<br>";
}

sortArrayFOREACH($month);

/*Defining an array (or arrays) using associative arrays where Restaurants used as key for indexing
    that holds this information about Name and Average Cost of the 10 best Restaurants in Atlanta*/

      $Restaurants = array(
                      "Chama Gaucha" => 40.50,
                      "Aviva by Kameel" => 15.00,
                      "Bone’s Restaurant" => 65.00,
                      "Umi Sushi Buckhead" => 40.50,
                      "Fandangles" => 30.00,
                      "Capital Grille" => 60.50,
                      "Canoe" => 35.50,
                      "One Flew South" => 21.00,
                      "Fox Bros. BBQ" => 15.00,
                      "South City Kitchen Midtown" => 29.00);
// End of defining array

// Printing unsorted table of Restaurants

echo "According to the Trip Advisor,
        the 10 best Restaurants in Atlanta based up votes for 2016 are as follows : " . "<br><br>";
printTable($Restaurants);


echo "<br>"."Restaurants 10 best Restaurants in Atlanta ordered by Price:" . "<br><br>";
sortByPrice($Restaurants);

echo "<br>"."Restaurants 10 best Restaurants in Atlanta ordered by Name:" . "<br><br>";
sortByName($Restaurants);


// Function to to modify output that to prints the result of the table ordered by price
function sortByPrice($Restos)
{
    asort($Restos); // asort function sorts an array by value while maintaining index association
    printTable($Restos);
  
}

// Function to to modify output that to prints the result of the table ordered by name
function sortByName($Restos)
{
ksort($Restos); // ksorts function sorts an array by key,
                 // keeping key to data association. used withociative arrays
    printTable($Restos);
  
}


// Function to print Restaurants in table formate using simple html tags and for loop
function printTable($Restos){

$html = '<table border="1">';
    // header row
    $html .= '<tr>';
  
            $html .= '<th>' . 'Restaurant Name'. '</th>';
            $html .= '<th>' .'Average Cost'. '</th>';
    $html .= '</tr>';

    // data rows
    foreach( $Restos as $key=>$value){
        $html .= '<tr>';
     
            $html .= '<td>' . $key." " . '</td>';
             $html .= '<td>' . $value . '</td>';
      
        $html .= '</tr>';
    }

    // finish table and print it

    $html .= '</table>';
    
    echo $html;

}

?>

</body>

</html>