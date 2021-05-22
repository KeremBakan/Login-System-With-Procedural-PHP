
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login System Procedural</title>
</head>
<body>

<div id="navbar">

    <ol>
        <li><a style="font-size:28px" href="index.php">Brand Site</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <?php
            if(isset($_SESSION["userUid"])){
                echo "<li style='float:right'><a href='profile.php'>Profile</a></li>";
                echo "<li style='float:right'><a href='includes/logout.inc.php'>Logout</a></li>"; 
            } else {
                echo "<li style='float:right'><a href='signup.php'>Sign up</a></li>";
                echo "<li style='float:right'><a href='login.php'>Login</a></li>"; 
            }
        ?>
    </ol>
</div>