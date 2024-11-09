<?php
include('config.php'); // Database configuration

$message = ''; // Variable to store success/error messages

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize POST data
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $gnd = mysqli_real_escape_string($con, $_POST['gnd']);
    $birthp = mysqli_real_escape_string($con, $_POST['birthp']);
    $style = mysqli_real_escape_string($con, $_POST['style']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gname = mysqli_real_escape_string($con, $_POST['gname']);

    // Insert data into the artist table
    $query = "INSERT INTO artist (Artist_ID, Gender, Birthplace, Style_Of_Art, Age, Name, G_Name) 
              VALUES ('$id', '$gnd', '$birthp', '$style', '$age', '$name', '$gname')";

    if (mysqli_query($con, $query)) {
        $message = '<div class="alert alert-success">Artist data successfully added.</div>';
    } else {
        $message = '<div class="alert alert-danger">Error: ' . htmlspecialchars(mysqli_error($con)) . '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARIES</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        th, td, option {
            height: 30px;
            width: 500px;
            text-align: center;
        }
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">ARIES ART GALLERY</a>
        </div>
        <?php include('menu.php'); ?>
    </div>
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Add Artist</h1>
                    <p class="intro-text">*WELCOME*</p>
                    <a href="#contact" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Artist Form Section -->
<section id="contact">
    <div class="container content-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- Display success or error message -->
                <?php echo $message; ?>

                <!-- Artist Form -->
                <form id="contactform" action="addartist.php" method="post">
                    <div class="form">
                        <table width="auto" align="center">
                            <tr><td><input type="text" name="id" placeholder="Artist ID" ></td></tr>
                            <tr>
                                <td>
                                    <select name="gnd" required>
                                        <option value="">Artist Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr><td><input type="text" name="birthp" placeholder="Artist Birthplace" required></td></tr>
                            <tr><td><input type="text" name="style" placeholder="Style of Art" required></td></tr>
                            <tr><td><input type="text" name="age" placeholder="Artist Age" required></td></tr>
                            <tr><td><input type="text" name="name" placeholder="Artist Name" required></td></tr>
                            <tr>
                                <td>
                                    <?php
                                    $res = mysqli_query($con, "SELECT * FROM gallery");
                                    if (!$res) {
                                        echo '<div class="alert alert-danger">Error loading galleries: ' . mysqli_error($con) . '</div>';
                                    }
                                    ?>
                                    <select name="gname" >
                                        <option value="">Select Gallery Name</option>
                                        <?php
                                        while ($row = mysqli_fetch_array($res)) {
                                            echo '<option value="' . htmlspecialchars($row['Name']) . '">' . htmlspecialchars($row['Name']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr><td><button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button></td></tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('chooseentry.php'); ?>
<?php include('footer.php'); ?>

<!-- jQuery and Bootstrap JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/theme.js"></script>
</body>
</html>
