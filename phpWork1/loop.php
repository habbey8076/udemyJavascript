<?php
//$i = 30;
/*for ($i= 2 ; $i <=30; $i= $i + 2){

echo $i."<br>";*/


/*for ($i= 10 ; $i >= 0; $i--){

echo $i."<br>";

}*/

$family = array("Rob", "ayo", "Joy", "Ada");

foreach ($family as $key => $value){

  $family[$key] = $value. " African ";

  echo "$Array item ".$key." is ".$value."<br>";
}



for ($i= 0 ; $i < sizeof($family); $i++) {

echo $family[$i]."<br>";

}

?>
