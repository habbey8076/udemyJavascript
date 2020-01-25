<?php

$user = "abi";
if ($user == "rob"){

  echo "Hello Rob";
}else{

  echo "who are you";
}

echo "<br><br>";
//$age = 25;

$age = (rand(15,30));

if($age >= 25){

  echo "you are too old";
}elseif($age <=17)  {

  echo "You are too young";
}elseif($age <=25){

  echo "You may proceed";

}else{

  echo "out of range";
}

?>
