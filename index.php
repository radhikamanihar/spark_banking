<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
    
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h2 style="color:bisque" >Welcome to Spark bank!!</h3>
                  
                  <h3 style="color:bisque">Let us help you grow!!</h2>
                  <a href="createuser.php">
                  <button class="btn " style="margin:10px;padding:5px; background-color: rgba(190, 158, 160, 0.9); border-radius:5px" >Become a member today</button>
</a>
                </div>
              </div>
              
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                  <img src="img/cretae.png" class="img-fluid" width:200px height:200px> 
                    <br>
                    <a href="createuser.php"><button style="margin:10px; padding:5px; background-color: rgba(190, 158, 160, 0.9); border-radius:5px">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                  <img src="img/trans.png" class="img-fluid" width:200px height:200px> 
                    
                    <br>
                    <a href="transfermoney.php"><button style="margin:10px; padding:5px; background-color: rgba(190, 158, 160, 0.9); border-radius:5px">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/his.jfif" class="img-fluid" width:200px height:200px> 
                    <br>
                    <a href="transactionhistory.php"><button style="margin:10px;padding:5px; background-color: rgba(190, 158, 160, 0.9); border-radius:5px">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <section>
      <footer class="text-center mt-5 py-2 fixed-bottom">
        <p>&copy 2021 Made  by <b>Radhika Manihar</b> <br>Web Developer Intern @ The Spark foundation </p>
        	
      </footer>
</section>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>