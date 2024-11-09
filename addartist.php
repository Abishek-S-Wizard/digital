<?php
include ('config.php'); // Ensure config.php contains a connection setup for $con

// Collect POST data with proper sanitization
$id = mysqli_real_escape_string($con, $_POST['id']);
$gnd = mysqli_real_escape_string($con, $_POST['gnd']);
$birthp = mysqli_real_escape_string($con, $_POST['birthp']);
$style = mysqli_real_escape_string($con, $_POST['style']);
$age = mysqli_real_escape_string($con, $_POST['age']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$gname = mysqli_real_escape_string($con, $_POST['gname']);

// Insert the data into the database
$res = mysqli_query($con, "INSERT INTO artist VALUES ('$id', '$gnd', '$birthp', '$style', '$age', '$name','gname')");

// Check for successful insertion
if ($res) {
            echo '<script> alert("Submitted Successfully"); </script>';
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
