<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>PHP - CRUDE</title>
</head>

<body>
    <?php
    include("dbconnection.php");
?>
    <div class="container">
        <div class="row-md-12">
            <!-- create form -->

            <?php
        session_start();
        if(isset($_SESSION['response_message'])) {
            echo $_SESSION['response_message'];
            unset($_SESSION['response_message']);
        }
    ?>
            <?php
        if(isset($_GET['id']) && $_GET['id'] != 0) {
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $get_user_info = mysqli_query($conn, "SELECT * FROM users WHERE user_id=" . $id); // get user with id =1
            $row = mysqli_fetch_row($get_user_info); // get user data and pass to array
    ?>

            <!-- This form will show if the above code is true -->
            <form action="update.php" method="post">
                <div class="form-group">
                    <label>
                        <h3>Edit Form</h3>
                    </label>
                </div>
                 <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" value="<?php echo $row[1]; ?>">
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname" value="<?php echo $row[2]; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $row[3]; ?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address"><?php echo $row[4]; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="updatedata">Update Data</button>
                </div>

                <?php
        }
    ?>
                <a class="btn btn-outline-info" href="index.php">Back to Main Page</a>

            </form>
        </div>
    </div>
</body>
</html>