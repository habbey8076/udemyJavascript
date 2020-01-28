<?php

if ($_GET['city']){


  //$forecastPage = file_get_contents("http://www.weather-forecast.com/locations/forecasts/latest");

    $forecastPage = file_get_contents("http://completewebdevelopercourse.com/locations/London");

      $pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);

    //  echo $pageArray[1];

    $secondPageArray = explode('</span></span></span>', $pageArray[1]);

    $weather = $secondPageArray[0];


}


 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">

      <title> Weather Scrapper </title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Hello, world!</title>
     <style type="text/css">

     html {
         background:url(bgImage.jpeg) no-repeat center center fixed;
         -webkit-background-size: cover;
         background-color: blue;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }

      body{

           background: none;
         }

     .container{

           text-align:center;
           margin-top: 100px;
           width:450px;
         }

         input{

           margin: 20px 0;
         }

         #weather{

           margin-top: 15px;
         }

     </style>

   </head>
   <body>
          <div class="container">

            <h1> What's The Weather?</h1>

            <form>
              <div class="form-group">
                <label for="City">Enter the name of a City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="e.g. Lagos, London">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>

                <div id="weather"> <?php

                    if ($weather) {

                        echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
                      }
                ?>
              </div>

            </form>

          </div>


     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
 </html>
