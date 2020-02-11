<?php

session_start();



if(array_key_exists('email', $_POST) OR array_key_exists('password',$_POST)){

  $link = mysqli_connect("shareddb-r.hosting.stackcp.net", "myWork-313233240c","ahqfxjenl5", "myWork-313233240c" );
  if (mysqli_connect_error()){

    die ("There was an error connecting to the db");
  }

  if($_POST['email'] == '') {

    echo "<p> Email address is required.</p>";

  }else if($_POST['password'] == '') {

    echo "<p> Password is required.</p>";

  }else{


    $query = "Select `id` from `user` where email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

      if (mysqli_query($link, $query)){

        $result = mysqli_query($link, $query);

        if(mysqli_num_rows($result) > 0){

          echo "<p>That email add has been taken</p>";
        }else{

          $query = "Insert Into `user` (`email`, `password`) Values ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."' )";

          if (mysqli_query($link, $query)){

          $_SESSION['email'] = $_POST['email'];

          header ("Location: session.php");
          }else{

            echo "<p> Please try again</p>";
          }
        }
      }


  }
}




 ?>

 <form method = "post">

   <input name="email" type="text" placeholder="email address">

   <input name="password" type="password" placeholder="Password">

  <p> <input type="submit" value="sign-up"></p>

 </form>
