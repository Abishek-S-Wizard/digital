<?php
include ('config.php');

// Get POST data and secure it
$title = mysqli_real_escape_string($con, $_POST['title']);
$type = mysqli_real_escape_string($con, $_POST['type']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$yiwm = mysqli_real_escape_string($con, $_POST['yiwm']);
$gname = mysqli_real_escape_string($con, $_POST['gname']);
$aid = mysqli_real_escape_string($con, $_POST['aid']);

// Check if the provided A_ID exists in the artist table
$check_artist = mysqli_query($con, "SELECT * FROM artist WHERE Artist_ID = '$aid'");

if (mysqli_num_rows($check_artist) == 0) {
    echo '<script> alert("Invalid Artist ID! Please select a valid artist."); </script>';
    exit; // Stop the script if the artist ID is invalid
}

// Proceed with the insert query if Artist ID exists
$res = mysqli_query($con, "INSERT INTO artwork (Title, Type_Of_Art, Prices, YIWM, G_Name, A_ID) 
                            VALUES ('$title', '$type', '$price', '$yiwm', '$gname', '$aid')") or die(mysqli_error($con));

// Check for successful insertion
if ($res) {
    echo '<script> alert("Submitted Successfully"); </script>';
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
