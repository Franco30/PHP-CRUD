<?php

include("dbconnection.php"); // include database connection file and open a connection

$get_data = mysqli_query($conn, "SELECT * FROM users;");

while($row = mysqli_fetch_array($get_data)) {

    // row always starts at 0

    // print table rows inside table element
    echo "<tr>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td><br/>";
    echo "<td><a href='edit.php?id=" . $row[0] . "'>Edit</a> <a href='delete.php?id=" . $row[0] . "'>Delete</a></td>";
    echo "</tr>";
}