
<?php include "navbar.php" ?>

<style>
    input{
        font-size: 25px;
        outline:none;
        border: 2px solid #484848;
        border-radius: 5px;
    }
    input[type=submit],input[type=reset]{
        padding: 10px;
    }
    input[type=submit]:hover,input[type=reset]:hover{
        background:#aaa;
    }
    input[type=submit]:active,input[type=reset]:active{
        background:grey;
    }
</style>

<div style="margin-top:10px; text-align:center;color:#ddd;">
    <form action="includes/login.inc.php" method="post">
        <legend style="color:#ddd;"><h1>Login and buy more stuff</h1></legend> <br>
        <input type="text" name="uid" id="" placeholder="Nickname/Email here..."> <br> <br>
        <input type="password" name="pwd" id="" placeholder="Password here..."> <br> <br>
        <input type="submit" name="submit" value="Sign up"> <input type="reset" value="Reset">
    </form>
    <?php 
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>You have to fill all inputs on the page!</p>";
                } else if($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login information!</p>";
                } 
            }
        ?>
</div>
</body>
</html>