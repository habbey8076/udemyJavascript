<?php
echo "Hello World";
$name = "Rob";
echo $name;
$string1 = "<p> This is me!";
$string2 = "This is the second </p>";
echo $string1." ".$string2;

$myNumber = 45;

$calculation = $myNumber * 31 /97 +4;
echo "The result of the calculation is".$calculation;

$myBool = true;
echo"<p> This statement is true? ".$myBool."</p>";

$variableName = "name";

echo $$variableName;
echo "<br><br>";

$myArray = array("Rob", "Ayo","Ayo");

$myArray[] = "Laide"; //inserting into an array
 print_r($myArray) ;

 echo "<p> $myArray[2] </p>";

 $anotherArray[0] = "pizza";
  $anotherArray[1] = "rice";
   $anotherArray[2] = "yello";
    $anotherArray[3] = "come";
  print_r($anotherArray);

echo "<br><br>";
  $thirdArray = array(
    "France" => "French",
    "British" => "English",
    "Yoruba" => "Yoruba"
   );
   unset($thirdArray["Yoruba"]);
  print_r($thirdArray);

  echo sizeof($thirdArray);



?>
