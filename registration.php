<?php

    $con = mysqli_connect('localhost','simone','simone94','simodb')or die ("Failed to connect to MySQL: " . mysqli_connect_error($con));

    include 'isPresent.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pass'];
    $confirm = $_POST['confirm'];

    if (empty($firstname) || empty($lastname) || empty($email) || empty($pwd) || empty($confirm)) {
        echo "<p>Mancano dati in input,ti preghiamo di controllare</p>\n";
        echo "</body>\n</html>";
        exit();
    }

    mysqli_real_escape_string($con, $firstname);
    mysqli_real_escape_string($con, $lastname);
    mysqli_real_escape_string($con, $email);
    mysqli_real_escape_string($con, $pwd);
        
    if(isPresent($con, $email))
        {
            echo "Sei già registrato, puoi accedere al sito cliccando sul pulsante Sign-in";
            mysqli_close($con);

            header('Location: login.php');
        }

    else 
    {
        $password = sha1($pwd);

        $stmt = mysqli_prepare($con, "INSERT INTO utenti VALUES (?, ?, ?, ?);");

        mysqli_stmt_bind_param($stmt,'ssss', $firstname, $lastname, $email, $password);

        if(mysqli_stmt_execute($stmt))
        {
            session_start();
            
            echo "<p>$firstname $lastname, i tuoi dati sono stati ricevuti ed inseriti correttamente</p>\n";
            echo "<p>Ora puoi accedere al sito</p>\n";
            
            mysqli_stmt_close($stmt);
            mysqli_close($con);

            header('Location: home.php');
        }
        else
        {
            echo "<p>errore nell'inserimento</p>\n";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($con);

    }

?>