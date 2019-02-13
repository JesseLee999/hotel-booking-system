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
    <nav class="navbar is-fixed-top is-warning" role="navigation" aria-label="main navigation">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <img src="img/pineapple-logo.png" id="navLogo" alt="Logo">
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
            <div class="columns">
                <div class="column is-6">
                    <div class="box" id="bookForm">
                        <form method="POST" action="index.php">
                            First Name:
                            <input class="input is-rounded is-hovered" name="name" type="text" placeholder="Please enter your name"
                                required>
                            Surname:
                            <input class="input is-hovered is-rounded" name="surname" type="text" placeholder="Please enter your surname"
                                required>
                            <br>
                            Select your hotel below:
                            <br>
                            <div class="control">
                                <label class="wrapper" for="states"></label>
                                <div class="select is-rounded">
                                    <div class="aside">
                                        <select name="hotels" required>
                                            <option value="" disabled selected>--please select your hotel--</option>
                                            <option value="Pepperclub Hotel" name="hotel1">Pepperclub Hotel</option>
                                            <option value="Beachside" name="hotel2">Beachside</option>
                                            <option value="The Walden Suites" name="hotel3">The Walden Suites</option>
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
                <div class="column is-5 is-offset-1">
                    <div class="box">
                    <?php 
                    if(isset($_POST['submit_btn']))  {
                            } ?> 
                            <p>Thanks<strong>
                                <?php echo $_POST['name']; ?>
                                <?php echo $_POST['surname'];  ?>
                                </strong><p> You are booking<strong>
                                <?php echo $_POST['hotels'];  ?></strong>
                                for
                                <?php $date1 = strtotime($_POST['date1']);  
                                $date2 = strtotime($_POST['date2']);   
                                $diff = abs($date2 - $date1);  

                                $years = floor($diff / (365*60*60*24));

                                $months = floor(($diff - $years * 365*60*60*24)
                                                            / (30*60*60*24));

                                $days = floor(($diff - $years * 365*60*60*24 - 
                                            $months*30*60*60*24)/ (60*60*24)); 
                                echo "<strong>" .$days. "</strong> nights."; 
                            
                            ?>
                            </p>
                            
                    </div>      
                </div>              
            </div>
        </div>
    </section>

</body>

</html>