<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/create_user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Basic Banking System</title>
</head>
<body>
<!-------------------navbar section------------------->

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><h2>SPARK BANK</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create_user.php">Create User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trans_money.php">Transfer Money</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<!------------------------create user----------------------->

<div class="container">
    <div class="row">
        <div class="col-md-6 card">
            <h2>CREATE USER</h2>
            <form class="myForm text-center" action="" method="POST">
                
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name" name="Name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email Id" name="Email" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" placeholder="Balance" name="Balance">
                </div>
                <input type="submit" class="butt" name="submit" value="CREATE"/>
            </form>
      </div>
               <div class="col-md-6 text-center">
               <img src="images/trans1.jpg" class="img-fluid">
               </div>
    </div>
</div>


<!----------------------javascript---------------------------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>
<!--ends javascript-->
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $username = $_POST['Name'];
    $email = $_POST['Email'];
    $balance = $_POST['Balance'];

 $q = "insert into createusers(username,email,balance) values('{$username}','{$email}','{$balance}')";


    $result = mysqli_query($con,$q);

    if($result){
        ?>
        <script>
            alert(" New User Created");
            window.location='trans_money.php';
        </script>
        <?php
    }else{
         ?>
        <script>
            alert("User Not Created");
        </script>
        <?php
    }
}
?>
