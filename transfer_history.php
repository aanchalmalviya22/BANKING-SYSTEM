<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/trans_history.css">
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
          <a class="nav-link" href="transfer_history.php">Transaction History</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>

<br><br><br><br><br>

<div class="container">
  <h1 class="display-5 lh-1 pt-0 pb-0 text-center" style="color :black;">Transaction History</h1>

  <div class="table-responsive-sm">
    <table class="table table-hover table-sm table-stripped table-bordered" style="border-color:black;">
      
      <tr>
        <th class="text-center py-2 colorr">S.No.</th>
        <th class="text-center py-2 colorr">Sender</th>
        <th class="text-center py-2 colorr">Receiver</th>
        <th class="text-center py-2 colorr">Amount</th>
        <th class="text-center py-2 colorr">Date & Time</th>
      </tr>

       <?php 
           include 'connection.php';

           $q ="SELECT * FROM transaction";

           $query =mysqli_query($con, $q);

           while($rows = mysqli_fetch_assoc($query))
           {
            ?>

            <tr style="color: black;">
              <td class="py-2"><?php echo $rows['sno'] ?></td>
              <td class="py-2"><?php echo $rows['sender'] ?></td>
              <td class="py-2"><?php echo $rows['receiver'] ?></td>
              <td class="py-2"><?php echo $rows['amount'] ?></td>
              <td class="py-2"><?php echo $rows['datetime'] ?></td>
            
            <?php
           }

           ?>

    </table>
    
  </div>
</div>


