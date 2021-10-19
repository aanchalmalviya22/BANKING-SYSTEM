<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Basic Banking System</title>
</head>

<body>

<!-------------------navbar section------------------->

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><h2>SPARK BANK</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <li class="nav-item">
          <a class="nav-link" href="Transfer_history.php">Transaction History</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>

<!------------------banner-section--------------------->

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-title1">WELCOME TO SPARK BANK</p>
                <p class="promo-title2">Make Your Transaction Easy</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="images/bank1.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!------------------service section---------------------->

<section id="services">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="images/trans1.jpg" class="service-img1">
                <p>Click Hear To Create Users</p>
                <a href="create_user.php" class="btn">Create User</a>
            </div>
            <div class="col-md-4">
                <img src="images/trans222.jpg" class="service-img2">
                <p>Click Hear To Make Transaction</p>
                <a href="trans_money.php" class="btn">Transfer Money</a>
            </div>
            <div class="col-md-4">
                <img src="images/trans_his3.jpg" class="service-img3">
                <p>Click Hear To See Transaction History</p>
                <a href="Transfer_history.php" class="btn">Transaction History</a>
            </div>
        </div>
    </div>
</section>

<!---------------------footer section------------------>

<section id="footer">
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-md-12">
            <hr>
            <p>2021, Made by <b>AANCHAL MALVIYA</b></p>
        </div>
    </div>
</div>
</section>

<!----------------------javascript---------------------------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
 <!--ends javascript-->

</body>
</html>