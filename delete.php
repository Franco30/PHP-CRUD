<?php

include("dbconnection.php"); // include database connection file and open a connection

/* $_GET data
    id - get from URL query string using $_GET method */

if( isset($_GET['id']) ) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    /* delete record */
    $delete_data = mysqli_query($conn, "DELETE FROM users WHERE user_id=" . $id . ";");

    session_start(); // start a session

    if($delete_data) {
        // success response
        $_SESSION['response_message'] = "<span class='badge badge-success'>User has been successfully deleted.</span>";
    } else {
        // failed response
        $_SESSION['response_message'] = "<span class='badge badge-danger'>User deletion failed.</span>";
    }

    header("Location: index.php"); // return to main page
}

?>