<?php

$link = mysqli_connect("shareddb-r.hosting.stackcp.net", "usrdb23-31323391fb","sf!0t4tT1_<*", "usrdb23-31323391fb" );
if (mysqli_connect_error()){

  die ("There was an error connecting to the db");
}

//$query = "Insert Into user (`id`, `email`, `password`)
        //  VALUES ('4','hsay@yahoo.com', 'owo')";

        //  $query = "Update `user` Set password = 'anyone' where email = 'raha@hotmail.com'  Limit 1 ";

//mysqli_query($link, $query);

$query = "Select * FROM user where email like '%s%'";

if ($result = mysqli_query($link, $query)){

  while ($row =  mysqli_fetch_array($result)){

    print_r($row);
      }

  //echo "Query was susscessful";

//  echo "Your email is ".$row['1']. " and your password is ".$row['2'];
  }
 ?>
