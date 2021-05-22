
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
        <form action="includes/signup.inc.php" method="post">
            <legend style="color:#ddd;"><h1>Signup and start buying</h1></legend> <br>
            <input type="text" name="name" id="" placeholder="Real name here...">  <br> <br>
            <input type="text" name="uid" id="" placeholder="Nickname here..."> <br> <br>
            <input type="email" name="email" id="" placeholder="Email here..."> <br> <br>
            <input type="password" name="pwd" id="" placeholder="Password here..."> <br> <br>
            <input type="password" name="pwdRepeat" id="" placeholder="Repeat password..."> <br> <br>
            <input type="submit" name="submit" value="Sign up"> <input type="reset" value="Reset">
        </form>

        <?php 
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>You have to fill all inputs on the page!</p>";
                } else if($_GET["error"] == "invaliduid"){
                    echo "<p>Choose a proper username!</p>";
                } else if($_GET["error"] == "invalidemail"){
                    echo "<p>Choose a proper email!</p>";
                } else if($_GET["error"] == "invalidpwd"){
                    echo "<p>Choose a proper password!</p>";
                } else if($_GET["error"] == "existinguid"){
                    echo "<p>Existing username!</p>";
                } else if($_GET["error"] == "stmtfaileduid" || $_GET["error"] == "stmtfailedcreateuser"){
                    echo "<p>Something went wrong:(</p>";
                }
            }
        ?>

    </div>



</body>
</html>