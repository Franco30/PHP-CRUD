<?php

include("dbconnection.php"); // include database connection file and open a connection

/* $_POST data
    id - input hidden name attribute
    savedata - input submit name attribute
    firstname - input text name attribute
    lastname - input text name attribute
    email - input text name attribute
    address - textarea name attribute */

if( isset($_POST['id']) ) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    /* update all columns - firstname, lastname, email, address */
    $update_data = mysqli_query($conn, "UPDATE users SET firstname='" . $firstname . "', lastname='" . $lastname . "', email='" . $email . "', address='" . $address . "' WHERE user_id=" . $id . ";");

    session_start(); // start a session

    if($update_data) {
        // success response
        $_SESSION['response_message'] = "<span class='badge badge-success'>User has been successfully updated.</span>";
    } else {
        // failed response
        $_SESSION['response_message'] = "<span class='badge badge-danger'>User modification failed.</span>";
    }

    header("Location: index.php"); // return to main page
}

?>