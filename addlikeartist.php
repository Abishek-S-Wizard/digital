<?php
include('config.php');
$aid = $_POST['aid'];
$name = $_POST['cname'];
$res = mysqli_query($con,"INSERT INTO like_artist(C_ID,C_Name) VALUES ('$aid','$name')") or die (mysqli_error());
if ($res) {
    echo '<script> alert("Submitted Successfully"); </script>';
} else {
echo '<script> alert("Try Again"); </script> '. mysqli_error($con);
}
?>