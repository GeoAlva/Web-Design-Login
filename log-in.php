<?php

    $con = mysqli_connect('localhost','simone','simone94','simodb')or die ("Failed to connect to MySQL: " . mysqli_connect_error($con));

    include 'isPresent.php';
    
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $control = false;
    
    mysqli_real_escape_string($con, $email);
    mysqli_real_escape_string($con, $password);

    if(!isPresent($con, $email)){
        echo "<p>Non sei presente nel database, registrati se vuoi accedere al sito</p>\n";
        header('Location: registration.php');
    }

    $stmt = mysqli_prepare($con, "SELECT * FROM utenti WHERE email =?");

    mysqli_stmt_bind_param($stmt,'s', $email);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $firstname, $lastname, $email, $password);

    mysqli_stmt_fetch($stmt);

    echo $firstname;

    session_start();

    $_SESSION["login"] = true;
    $_SESSION['name'] = $firstname;
    $_SESSION['email'] = $email;

    echo 'Welcome, '.$firstname." ".$lastname."\n<br>";

    mysqli_stmt_close($stmt);

    header('Location: home.php');

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
    
?>