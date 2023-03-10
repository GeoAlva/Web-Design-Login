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

            <form class="form" action="registration.php" method="post">
                <h2 class="form-left">Sign In</h2>

                <div class="form-element">
                    <input type="text" id="firstname" name="firstname" class="form-input" placeholder=" " required>
                    <label class="floating-label" for="firstname">First Name</label>
                </div>

                <div class="form-element">
                    <input type="text" id="lastname" name="lastname" class="form-input" placeholder=" " required>
                    <label class="floating-label" for="lastname">Last Name</label>
                </div>

                <div class="form-element">
                    <input type="email" id="email" name="email" class="form-input" placeholder=" " required>
                    <label class="floating-label" for="email">Email</label>
                </div>

                <div class="form-element">
                    <input type="password" id="pass" name="pass" class="form-input" placeholder=" " required>
                    <label class="floating-label" for="pass">Password</label>
                </div>

                <div class="form-element">
                    <input type="password" id="confirm" name="confirm" class="form-input" placeholder=" " required>
                    <label class="floating-label" for="confirm">Confirm Password</label>
                </div>

                <input type="submit" id="submit" name="submit" value="Submit" class="btn"> <br><br>
                <p class="form-left"> Already Registered? <a href="login.php"> Log in</a></p>

                <br>
                <img src="images/logo.png" alt="logo" class="logo">
            </form>


        </div>
    </div>


</body>

</html>