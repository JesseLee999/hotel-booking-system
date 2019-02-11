<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.7.2/css/bulma.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Pineapple Express</title>
</head>
<body>
    <nav class="navbar is-fixed-top is-warning" role="navigation" aria-label="main navigation">
      <div class="container is-fluid">
          <div class="navbar-brand">
              <a class="navbar-item" href="#">
                <img src="img/pineapple-logo.png" id="navLogo"  alt="Logo">
                <h1 class="subtitle is-5">Pineapple Express Bookings</h1>
              </a>
              <span class="navbar-burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
              </span>
          </div>
          <div id="navbarMenu" class="navbar-menu">
              <div class="navbar-end">
                  <span class="navbar-item">
                    <span><?php  if (isset($_SESSION['username'])) : ?>
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    </span>
                    <span class="navbar-item">
                    <a class="button is-warning is-text" href="index.php?logout='1'" id="navButton"> 
                    <p>logout</p></a>
                    <?php endif ?>
                    </span>
                  </span>
              </div>
          </div>
      </div>
    </nav>


    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="columns">
                <div class="column is-6">
                    <div class="box" id="bookForm">
                        <form method="get" action="index.php">
                            First Name:
                            <input class="input is-rounded is-hovered" name="name" type="text" placeholder="Please enter your name" required>
                            Surname:
                            <input class="input is-hovered is-rounded" name="surname" type="text" placeholder="Please enter your surname" required>
                            <br>
                            Select your hotel below:
                            <br>
                                <div class="control">
                                    <label class="wrapper" for="states"></label>
                                        <div class="select is-rounded">
                                            <div class="aside">
                                                <select id="hotelSelector" class="toggle-divs" required>
                                                    <option value="" disabled selected>--please select your hotel--</option>
                                                    <option value="1">Pepperclub Hotel</option>
                                                    <option value="2">The Walden Suites</option>
                                                    <option value="3">Beachside</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                Check-In:
                                <input class="input is-rounded is-hovered" name="name" type="date" placeholder="Please enter your check-in date" required>
                                Check-Out:
                                <input class="input is-rounded is-hovered" name="name" type="date" placeholder="Please enter your check-out date" required>
                                <br>
                                <br>
                                <button class="button is-rounded" type="submit" value="Submit">Submit</button>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </section>

<script>

$(document).ready(function() {
  $('.toggle-divs').on('change', function() {
    var nextAside = $(this).parent('.aside').next('.aside');
    nextAside.find("div").hide();
    nextAside.find(".div" + this.value).show()
  });
})

</script>
    
</body>
</html>