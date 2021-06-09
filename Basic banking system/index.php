<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic banking system</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/06f98189ab.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      include "navbar.php";
    ?>
    <div class="container-fluid">
      <div class="row mainpage" style="background-color:	#dbe6fd">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="heading text-center my-5 pt-3">
            <h2><b>Welcome to</b></h2>
            <br>
            <h1>TSF GRIP BANK</h1>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 mt-2 mb-2">
          <img class="img-fluid" src="image/2.jpg" alt="" >
        </div>
      </div>
    </div>


    <div class="container-fluid">
      <div class="row activity text-center">
        <div class="col-lg-4 col-md-4 col-sm-12 py-4 options">
          <i class="fas fa-users fa-9x py-3"></i>
          <br>
          <a href="createuser.php">
            <button class="btn btn-lg btn-primary" >Create User</button>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 py-4 options">
          <img src="image/moneytransfer.png" style="width: 180px; height: 176px;" alt="">
          <br>
          <a href="transfermoney.php">
            <button class="btn btn-lg btn-primary" >Transfer Money</button>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 py-4 options">
          <i class="fas fa-history fa-9x py-3"></i>
          <br>
          <a href="transactionhistory.php">
            <button class="btn btn-lg btn-primary" >Transaction History</button>
          </a>
        </div>

      </div>
    </div>


    <footer class="footer mt-5 pt-3">
        <p><small>&copy 2021. Made by <b>Tejas T D</b><br>GRIP TheSparksFoundation.</small></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
