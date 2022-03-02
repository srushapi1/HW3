<!DOCTYPE html>
 
<html>
 
<head>
 
 
<title>HW03</title>
 
</head>
 
<body>
 <h1>Part1</h1>
<h5>Click Below to know if Charlie ate my lunch or not</h5>
<a href="https://codd.cs.gsu.edu/~srushapi1/WP/HW/HW3/index.php">Click here</a>
 
<?php
 
$count=0;
echo "<BR>";
echo "<h1>Part2</h1>";
echo "<h2 style='text-align:center'>Checker board using alternating color values that are red and black.</h2>";
 
 
echo '<table style="width:300px" border="1" cellspacing="1" cellpadding="1" align="center">';
 
for($i=0; $i<9; $i++)
 
{
 
 
 
echo "<tr>";
 
for($j=0; $j<9; $j++)
 
{
 
$count=$count+1;
 
if($count%2 == 0)
 
{
 
 
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
    echo "<br>";
    echo "<br>";
    echo "<h4>Standard for loop:After sorting </h4>";
 
    sort($monthArray);
    $length = count($monthArray);
    for($i = 0; $i < $length; $i++) {
         echo $monthArray[$i];
         echo "<br>";
   }
}
function sortArrayFOREACH($monthArray){
    echo "<br>";
    echo "<br>";
    echo "<h4>FOREACH loop:After sorting</h4> ";
 
    sort($monthArray);
    foreach($monthArray as &$value) {
         echo $value;
         echo "<br>";
   }
}
$month=array('January','February','March','April','May','June','July','August','September','October','November','December');
$length = count($month);
echo "<br>";
echo "<h1>Part3</h1>";
echo "<br>";
echo "<br>";
echo "<h4>Printing using standard for loop:</h4>";
for($i = 0; $i < $length; $i++) {
         echo $month[$i];
         echo "<br>";
}
 
sortArray($month);
echo "<br>";
echo "<br>";
echo "<h4>Printing using FOREACH loop:</h4>";

foreach ($month as &$value) {
  echo $value;
  echo "<br>";
}
 
sortArrayFOREACH($month);
 
 
 
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
 
 
echo "<BR>";
echo "<h1>Part4</h1>";
echo "According to the Trip Advisor,
        the 10 best Restaurants in Atlanta based up votes for 2016 are as follows : " . "<br><br>";
printTable($Restaurants);
 
 
echo "<br>"."Restaurants 10 best Restaurants in Atlanta ordered by Price:" . "<br><br>";
sortByPrice($Restaurants);
 
echo "<br>"."Restaurants 10 best Restaurants in Atlanta ordered by Name:" . "<br><br>";
sortByName($Restaurants);
 
 
 
function sortByPrice($Restos)
{
    asort($Restos);
    printTable($Restos);
 
}
 
function sortByName($Restos)
{
ksort($Restos);
                 
    printTable($Restos);
 
}
 
 
function printTable($Restos){
 
$html = '<table border="1">';
   
    $html .= '<tr>';
 
            $html .= '<th>' . 'Restaurant Name'. '</th>';
            $html .= '<th>' .'Average Cost'. '</th>';
    $html .= '</tr>';
 
   
    foreach( $Restos as $key=>$value){
        $html .= '<tr>';
     
            $html .= '<td>' . $key." " . '</td>';
             $html .= '<td>' . $value . '</td>';
     
        $html .= '</tr>';
    }
 
   
 
    $html .= '</table>';
   
    echo $html;
 
}
 
?>
 
</body>
 
</html>