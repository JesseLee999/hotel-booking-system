<?php
include 'server.php';

$name = "";
$surname = "";
$hotelselect = "";
$date1 = "";
$date2 = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'registration');

$hotelselect = array(
    $hotel1 = 'R2984',
    $hotel2 = 'R1117',
    $hotel3 = 'R1638',
);


$date1 = strtotime("date1");  
$date2 = strtotime("date2");


$diff = abs($date2 - $date1);  

$years = floor($diff / (365*60*60*24));

$months = floor(($diff - $years * 365*60*60*24) 
                               / (30*60*60*24));

$days = floor(($diff - $years * 365*60*60*24 -  
             $months*30*60*60*24)/ (60*60*24));

/////   
    
    if (isset($_POST['submit_btn'])) {
    
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $hotelselect = mysqli_real_escape_string($db, $_POST['hotels']);
    $date1 = mysqli_real_escape_string($db, $_POST['date1']);
    $date2 = mysqli_real_escape_string($db, $_POST['date2']);
    
    
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($surname)) { array_push($errors, "Surname is required"); }
    if (empty($hotelselect)) { array_push($errors, "Surname is required"); }
    if (empty($date1)) { array_push($errors, "Check-in is required"); }
    if ($date1 <! $date2) {
        array_push($errors, "The check-out is invalid");
    }
    
    $name_check_query = "SELECT * FROM bookings WHERE name='$name' OR surname='$surname' LIMIT 1";
    $result = mysqli_query($db, $name_check_query);
    $user = mysqli_fetch_assoc($result);
    
    
    if (count($errors) == 0) {
    
        $query = "INSERT INTO bookings (name, surname, hotelselect, date1, date2) 
                    VALUES('$name', '$surname', '$hotelselect', '$date1', '$date2')";
        mysqli_query($db, $query);
        $_SESSION['name'] = $name;
    }
    }
    
    //////////
    
$sql = "SELECT name, surname, hotelselect FROM bookings";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"]. " - Surname: " . $row["surname"]. " " . $row["hotelselect"]. "<br>";
    }
} else {
    echo "0 results";
}


    ?>

