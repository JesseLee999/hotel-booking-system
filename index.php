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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <title>Pineapple Express</title>
</head>
<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
        <h1 class="title is-2">Pineapple Express Bookings</h1>
        <div class="box" >
        <?php  if (isset($_SESSION['username'])) : ?>
        <p class="enter">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <br>
    	<p class="enter"> <a href="index.php?logout='1'" >logout</a> </p>
        <?php endif ?>
        <</div>
            <div class="columns">
                <div class="column is-4">
                <div class="box" id="box2">
                    <form method="get" action="index.php" class="login-form">
                        First Name:
                        <input class="input is-rounded is-hovered" name="name" type="text" placeholder="Please enter your name" required>
                        Surname:
                        <input class="input is-hovered is-rounded" name="surname" type="text" placeholder="Please enter your surname" required>
                        <!-- Number of Nights:
                        <input class="input is-rounded is-hovered is" type="number" name="quantity" min="1" max="90" required> -->
                        <br>
                        Select your hotel below:
                        <br>
                        <div class="control">
                        <label class="wrapper" for="states"></label>
                            <div class="select is-rounded">
                                <select id="hotelSelector" class="is-hovered" required>
                                    <option value="" disabled selected>--please select your hotel--</option>
                                    <option value="one" name="one">Pepperclub Hotel</option>
                                    <option value="two" name="two">The Walden Suites</option>
                                    <option value="three" name="three">Beachside</option>
                                </select>
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
    </div>


    
</div>

<script  type="text/javascript">
    var dropdown = document.querySelector('.dropdown');
    dropdown.addEventListener('hover', function(event) {
    event.stopPropagation();
    dropdown.classList.toggle('is-active');
    });
</script>
    
</body>
</html>