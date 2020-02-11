<?php

    session_start();
    $error = "";

    if (array_key_exists("logout", $_GET)){

      unset($_SESSION);

      setcookie("id", "", time() -60*60**24*200);

      $_COOKIE["id"] = "";
    }else if(array_key_exists("id", $_SESSION) OR array_key_exists("id", $_COOKIE)){

      header("Location: loggedinPage.php");
    }

    if (array_key_exists("submit", $_POST)){

      $link = mysqli_connect("shareddb-s.hosting.stackcp.net", "newDiary-3132353eb2", "8rijpyqu0j", "newDiary-3132353eb2");

      if(mysqli_connect_error()){


        die("Database Connection error");
      }


    if (!$_POST['email']){

        $error .= "An email address is required<br>";

    }

    if (!$_POST['password']){

        $error .= "A password is required<br>";

    }

    if($error != ""){

      $error = "<p> There were error in your form: </p>".$error;
    }else {

    if($_POST['signUp'] == '1'){

    $query = "Select id From `diary` Where email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

      $result = mysqli_query($link, $query);

      if (mysqli_num_rows($result) > 0)  {

        $error = " That email address has been taken";
      }else {

        $query = "INSERT INTO `diary` (`email`, `password`) VALUES  ('".mysqli_real_escape_string($link, $_POST['email'])."' , '".mysqli_real_escape_string($link, $_POST['password'])."')";

        if(!mysqli_query($link, $query)){

            $error = "<p> Could not sign you up - please try again later.</p>";

        }else{

        $query = "UPDATE `diary` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

        mysqli_query($link, $query);

        $_SESSION['id'] = mysqli_insert_id($link);

        if($_POST['stayLoggedIn'] == 1){


          setcookie ("id", mysqli_insert_id($link), time() + 60*60*24*200);
        }
          header("Location: loggedinPage.php");

            }

          }

        } else  {

            $query = "Select * From `diary` Where email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

            $result = mysqli_query($link, $query);

            $row = mysqli_fetch_array($result);

            if(isset($row)){

              $hashedPassword = md5(md5($row['id']).$_POST['password']);


              if($hashedPassword == $row['password']){

                    $_SESSION['id'] = $row['id'];

                    if($_POST['stayLoggedIn'] == 1){


                      setcookie ("id", $row['id'], time() + 60*60*24*200);
                    }
                      header("Location: loggedinPage.php");

		                }
		          }
        }
      }
    


?>

<div id="error"><?php echo $error; ?> </div>

 <form method = "post">
    <input type="email" name="email" placeholder="your email address">
    <input type="password" name="password" placeholder="Password">
    <input type="checkbox" name="stayLoggedIn" value=1>
    <input type = "hidden" name="SignUp" value=1>
    <input type="submit" name ="submit" value="Sign-up">
 </form>

 <form method = "post">
    <input type="email" name="email" placeholder="your email address">
    <input type="password" name="password" placeholder="Password">
    <input type = "hidden" name="SignUp" value=0>
    <input type="checkbox" name="stayLoggedIn" value=1>
    <input type="submit" name ="submit" value="Log In">
 </form>
