<?php
session_start();
$conn = mysqli_connect("localhost","root","","gallery");
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $artist = $_POST["artist"];
    $art = $_POST["art"];
    $message = $_POST["message"];
    $query = "INSERT INTO contactus VALUES('','$name','$phone','$email','$artist','$art','$message')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo '<script> alert("Submitted Successfully"); </script>';
    }
    else{
        echo '<script> alert("Submitted Failed. Try Again."); </script>';
    }
}
?>