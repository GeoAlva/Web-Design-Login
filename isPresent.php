<?php

function isPresent($con, $email_to_search){

    $stmt = mysqli_prepare($con, "SELECT * FROM utenti WHERE email =?");

    mysqli_stmt_bind_param($stmt,'s', $email_to_search);

    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_bind_result($stmt, $firstname, $lastname, $email, $password);

    mysqli_stmt_fetch($stmt);
    
    if($email_to_search == $email)
        {
            mysqli_stmt_close($stmt);
            return true;
        }
    
    mysqli_stmt_close($stmt);
    return false;
    
}

?>