<?php
include_once 'server.php';

$name = "";
$surname = "";
$hotelselect = "";
$date1 = "";
$date2 = "";
$errors = array();

//Connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration');

/////   
    
    // Submitting into mysql database
    if (isset($_POST['submit_btn'])) {
    
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $hotelselect = mysqli_real_escape_string($db, $_POST['hotels']);
    $date1 = mysqli_real_escape_string($db, $_POST['date1']);
    $date2 = mysqli_real_escape_string($db, $_POST['date2']);
    
    
    $name_check_query = "SELECT * FROM bookings WHERE name='$name' OR surname='$surname' LIMIT 1";
    $result = mysqli_query($db, $name_check_query);
    $user = mysqli_fetch_assoc($result);

    // Validation
    $message = "You have already made this booking.";
    
  if ($user) { 
    if ($user['name'] === $name) {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

    
    
    if (count($errors) == 0) {
    
        $query = "INSERT INTO bookings (name, surname, hotelselect, date1, date2) 
                    VALUES('$name', '$surname', '$hotelselect', '$date1', '$date2')";
        mysqli_query($db, $query);
    }
    }
    
    //////////
    
    $sql = "SELECT name, surname, hotelselect FROM bookings";
    $result = mysqli_query($db, $sql);

    // Check for duplicates
    


    ?>

