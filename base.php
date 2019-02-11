<?php
include 'server.php';

$name = "";
$surname = "";
$hotelselect = "";
$date1 = "";
$date2 = "";
$errors = array();

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

// if (isset($_POST['submit_btn'])) {
//     $name = mysqli_real_escape_string($db, $_POST['name']);
//     $dateset = mysqli_real_escape_string($db, $_POST['days']);
// };

?>