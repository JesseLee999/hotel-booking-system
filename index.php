<?php 
  include 'base.php';

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
    <nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <img src="img/pineapple-logo.png" id="navLogo" alt="Logo">
                    <h1 class="subtitle is-5">Pineapple Express Bookings</h1>
                </a>
                <span class="navbar-burger" data-target="navbarMenu">
                    <span>
                    </span>
                    <span>
                    </span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <span class="navbar-item">
                        <span>
                            <?php  if (isset($_SESSION['username'])) : ?>
                            <p>Welcome <strong>
                                    <?php echo $_SESSION['username']; ?></strong></p>
                        </span>
                        <span class="navbar-item">
                            <a class="button is-warning is-text" href="index.php?logout='1'" id="navButton">
                                <p>logout</p>
                            </a>
                            <?php endif ?>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </nav>


    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container is-fluid">
                <div class="columns">
                    <div class="column is-5">
                        <div class="tile is-ancestor">
                            <div class="tile is-vertical is-5">
                                <div class="tile">
                                    <div class="tile is-parent is-vertical">
                                        <article class="tile is-child notification is-primary top-left">
                                            <figure class="image is-96x96">
                                                <img class="is-rounded" src="img/pepperclub-hotel-spa.jpg">
                                            </figure>
                                            <p class="title is-centered is-5">Pepperclub Hotel</p>
                                            <p class="title is-6">R810</p>
                                        </article>
                                        <article class="tile is-child notification is-warning">
                                            <figure class="image is-96x96">
                                                <img class="is-rounded" src="img/beachside.jpg">
                                            </figure>
                                            <p class="title is-5">Beachside</p>
                                            <p class="title is-6">R340</p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="tile is-vertical is-4">
                                <div class="tile">
                                    <div class="tile is-parent is-vertical">
                                        <article class="tile is-child notification is-warning">
                                            <figure class="image is-96x96">
                                                <img class="is-rounded" src="img/the-walden-suites.jpg"/>
                                            </figure>
                                            <p class="title is-5">Walden Suites</p>
                                            <p class="title is-6">R580</p>  
                                        </article>
                                        <article class="tile is-child notification is-primary">
                                            <figure class="image is-96x96">
                                                <img class="is-rounded" src="img/tipton-hotel.jpg">
                                            </figure>
                                            <p class="title is-5">Tipton Hotel</p>
                                            <p class="title is-6">R2100</p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="box" id="bookForm">
                            <form method="post" action="index.php">
                                First Name:
                                <input class="input is-rounded is-hovered" name="name" id="textform" type="text"
                                    placeholder="Please enter your name" required>
                                Surname:
                                <input class="input is-hovered is-rounded" name="surname" type="text" placeholder="Please enter your surname"
                                    required>
                                <br>
                                Select your hotel below:
                                <br>
                                <div class="control">
                                    <div class="select is-rounded">
                                        <div class="aside">
                                            <select name="hotels" id="hotelselector" required>
                                                <option value="" disabled selected>--select your hotel--</option>
                                                <option value="Pepperclub Hotel" name="hotel1">Pepperclub Hotel</option>
                                                <option value="Beachside" name="hotel2">Beachside</option>
                                                <option value="Walden Suites" name="hotel3">Walden Suites</option>
                                                <option value="Tipton Hotel" name="hotel4">Tipton Hotel</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                Check-In:
                                <input class="input is-rounded is-hovered" name="date1" type="date" placeholder="Please enter your check-in date"
                                    required>
                                Check-Out:
                                <input class="input is-rounded is-hovered" name="date2" type="date" placeholder="Please enter your check-out date"
                                    required>
                                <br>
                                <br>
                                <button class="button is-rounded" type="submit" value="Submit" name="submit_btn">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="box" id="bookForm">
                            <?php 
                            if(isset($_POST['submit_btn']))  {
                            $date1 = strtotime($_POST['date1']);  
                            $date2 = strtotime($_POST['date2']);   
                            $diff = abs($date2 - $date1);  

                            $years = floor($diff / (365*60*60*24));

                            $months = floor(($diff - $years * 365*60*60*24)
                                                        / (30*60*60*24));

                            $days = floor(($diff - $years * 365*60*60*24 - 
                                        $months*30*60*60*24)/ (60*60*24));
                                    
                            if ('hotel18') {
                                
                            }
                            
                            // $total = $price * $days;

                           
        ////////////////////////////////////////////////

                            echo "<p>Thanks <strong>" .$_POST['name']. " " .$_POST['surname']. "</strong><p> You are booking <strong>" .$_POST['hotels']. "</strong> for <strong>" .$days. "</strong> nights. </p><p> Daily rate: " .$daily. "<br><p>Total Rate: " ;  }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script src="js/main.js">
</script>

</html>