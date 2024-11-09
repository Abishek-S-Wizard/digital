<?php
include ('config.php');

$name = $_POST['name'];
$place = $_POST['place'];

// Corrected insert query with proper variable usage
$res = mysqli_query($con, "INSERT INTO gallery(Name, Place) VALUES ('$name', '$place')") or die(mysqli_error($con));

if ($res) {
    echo '<script> alert("Submitted Successfully"); </script>';
} else {
    echo '<script> alert("Submission Failed. Try Again."); </script>';
}
?>
