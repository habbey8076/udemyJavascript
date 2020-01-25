<?php
/*$i = 5;
while ($i <= 50){

  echo $i."<br>";
  $i = $i + 5;
}*/

$numberArray =   array (10,20,30,40,50);//array((rand(1,6))); //array(1,2,3,4,5);
$nuNumber = 0;

while ($nuNumber < sizeof($numberArray)) {
echo $numberArray[$nuNumber]."<br>";
$nuNumber++; // = $nuNumber + 1;
}

print_r($_GET);
echo $_GET["name"];
?>
