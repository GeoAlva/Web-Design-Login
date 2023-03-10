<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="home">
        <div class="left">

        </div>
        <div class="right">

            <form action="login.php" method="post" class="form">
                <h2 class="form-left">Log in</h2>

                <div class="form-element">
                    <input type="email" id="email" name="email" class="form-input" placeholder=" " required>
                    <label class="floating-label" for="email">Email</label>
                </div>

                <div class="form-element">
                    <input type="password" id="pass" name="pass" class="form-input" placeholder=" " required>
                    <label class="floating-label" for="pass">Password</label>
                </div>

                <input type="submit" id="submit" name="submit" value="Submit" class="btn"> <br><br>
                <p class="form-left"> Create Account? <a href="index.php">Sign-Up</a></p>
                <br>
                <img src="images/logo.png" alt="logo" class="logo">
            </form>


        </div>
    </div>


</body>

</html>