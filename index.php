
<?php include "navbar.php" ?>

<div style="color:#ddd; margin-top:10px; text-align:center;">

<?php
        if(isset($_SESSION["userUid"])){
            echo "<h1 style='font-size: 45px; font-style:italic; margin-bottom:10px;'>Welcome back " . $_SESSION["userUid"] . "</h1>";
        }
?>

    <h1 style="font-size: 45px; font-style:italic; margin-bottom:10px;">If you wanna buy some crap you are in the right place </h1>
    <a href="#"><h1 style="font-size: 45px; font-style:italic; margin-bottom:10px; color:#ddd;">Fun Craps </h1></a>
    <a href="#"><h1 style="font-size: 45px; font-style:italic; margin-bottom:10px; color:#ddd;">Boring Craps </h1></a>
    <a href="#"><h1 style="font-size: 45px; font-style:italic; margin-bottom:10px; color:#ddd;">Sad Craps </h1></a>
    <a href="#"><h1 style="font-size: 45px; font-style:italic; margin-bottom:10px; color:#ddd;">Happy Craps </h1></a>

</div>
    
</body>
</html>