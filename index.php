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
    <div class="container">
        <div class="row-lg-12">

            <!-- create form -->
            <form action="create.php" method="post">
                <?php
            session_start();
            if(isset($_SESSION['response_message'])) {
                echo $_SESSION['response_message'];
                unset($_SESSION['response_message']);
            }
        ?>
                <h3></h3>
                <div class="form-group">
                    <label>
                        <h3>Registration Form</h3>
                    </label>
                </div>
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname">
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="savedata">Save Data</button>
                </div>
            </form>

            <!-- record list -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require('retrieve.php');?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/x-javascript" src="js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
</body>

</html>