<?php
if(array_key_exists("submit", $_POST)){

  $link = mysqli_connect("shareddb-s.hosting.stackcp.net", "diaryWork-313235ce81", "r&>HqLZvKzQ9", "diaryWork-313235ce81");

  if(mysqli_connect_error()){

    die("Database Connection Error");
  }
  $error = "";

  if(!$_POST['email']){

    $error .= "An email address is required<br>";

  }if(!$_POST['password']){

    $error .= "Password is required<br>";
  }

  if ($error != ""){

    $error = "<p> There were error in your form:</p>".$error;
  }else{

    //$query = "SELECT `id` FROM `diary` where `email` = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
    $query = "Select id From `diary` Where email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

      $result = mysqli_query($link, $query);

      if(mysqli_num_rows($result) > 0){

        $error ="That error address is taken";
      }else{

        $query = "Insert Into `diary`(`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

        if (!mysqli_query($link, $query)){

          $error = "<p> Could not sign you up: Please try again</p>";

        }else{

          //$query = "UPDATE `diary` SET `password` = '".md5(md5mysqli_insert_id()).$_POST[`password`])"';
          echo  "Sign up successful";
        }
      }

  }

 ?>
<div id="error"><?php echo $error; ?> </div>

 <form method = "post">

    <input type="email" name="email" placeholder="your email address">
    <input type="password" name="password" placeholder="Password">
    <input type="checkbox" name="checkIT" value=1>
    <input type="submit" name ="submit" value="Sign-up">




 </form>
