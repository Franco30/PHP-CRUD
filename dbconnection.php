<?php

// open connection
$conn = mysqli_connect("localhost", "root", "", "phpcrud");

// check if connection success
if($conn) {
    // no need to display if the connection has been successful.
} else {
    die("Error:" . mysqli_connect_error()); // terminate page and print out the string
    mysqli_close($conn); // close connection
}

?>