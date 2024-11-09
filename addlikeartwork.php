<?php
include('config.php');
$title = $_POST['title'];
$name = $_POST['cname'];
$res = mysqli_query($con,"INSERT INTO like_artwork(AR_Title,C_Name) VALUES ('$title','$name')") or die (mysqli_error());
if ($res) {
    echo '<script> alert("Submitted Successfully"); </script>';
} else {
echo "Error: " . mysqli_error($con);
}
?>