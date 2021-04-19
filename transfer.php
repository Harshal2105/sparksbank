<!doctype html>
<html lang="en">

<?php
    include("connect.php");
?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   

    <title>Sparks Bank</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sparks Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container my-4">
    <h2>Transfer Money</h2>
</div>

<div class="container">
          <?php
              if(isset($_GET['customer_id'])) {
                  $c_id = $_GET['customer_id'];
                  $get_customers = "select * from customer where ID='$c_id'";
                  $run_customers = mysqli_query($conn, $get_customers);
                  $customer = mysqli_fetch_array($run_customers);
                  $customer_id = $customer['ID'];
                  $customer_name = $customer['Name'];
                  $current_balance = $customer['Current_Balance'];  
                  echo "
                      <form action='transfer.php?customer_id=$c_id' method='post' enctype='multipart/form-data'>
                          <label for='from' style='font-size: 20px;'>Transferring from</label>
                          <div class='form-row'>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='from_acc'>Customer ID</label>
                                  <input type='number' class='form-control' name='from_acc' value='$c_id' readonly>
                              </div>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='from_acc_name'>Customer Name</label>
                                  <input type='text' class='form-control' name='from_acc_name' value='$customer_name' readonly>
                              </div>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='current_balance'>'Current_Balance'</label>
                                  <input type='number' class='form-control' name='current_balance' value='$current_balance' readonly>
                              </div>
                          </div>
                          <br>
                          <label for='to' style='font-size: 20px;'>Transfer to</label>
                          <div class='form-row'>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='to_acc'>Customer Name</label>
                                  <select class='form-control' name='to_acc' required>
                                      <option value='0'>Select Name on Account</option>
                  ";
                                      $get_customers = "select * from customer";
                                      $run_customers = mysqli_query($conn, $get_customers);
                                      while($customer = mysqli_fetch_array($run_customers)) {
                                      $customer_id = $customer['ID'];
                                      $customer_name = $customer['Name'];
                                          echo "<option value='$customer_id'>$customer_name</option>";
                                      }
                  echo "
                                  </select>
                              </div>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='transfer_amt'>Transfer Amount</label>
                                  <input type='number' class='form-control' name='transfer_amt' placeholder='Amount' required>
                              </div>
                          </div>
                          <center>
                              <button type='submit' class='btn btn-primary' name='transfer'>Transfer Now</button>
                          </center>
                      </form>
                      <div class='row'>
                          <div class='col'>
                              <center>
                                  <button class='btn btn-light my-2'>
                                      <a href='customer.php' style='text-decoration: none; color: #000;'>Cancel Transfer</a>
                                  </button>
                              </center>
                          </div>
                      </div>
                  ";
              }
          ?>
      </div>




   </div>
    <section class="socialmedia my-lg-0 mt-3">
        <h4>Feel free to contact us.</h4>
        <div id="social" class="social-icons">
            <ul class="h-list social-icons-contact">
                <li>
                    <a href="https://www.linkedin.com/in/harshal-a-24307b125" target="_blank">
                        <img src="https://img.icons8.com/color/48/000000/linkedin.png" alt="LinkedIn Logo">
                    </a>

                    <a href="https://www.instagram.com/harshal_ambalkar_" target="_blank">
                        <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instagram Logo">
                    </a>

                    <a href="mailto:harshal.ambalkar.3@gmail.com" target="_blank">
                        <img src="https://img.icons8.com/fluent/48/000000/gmail.png" alt="Gmail Logo">
                    </a>
                </li>
            </ul>
        </div>
    </section>




    <footer>
        <span>Created by Harshal Ambalkar | <span class="far fa-copyright"></span> 2021 All rights
            reserved.</span>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>

  

<?php
    if (isset($_POST['transfer'])) {
        $Current_Balance = $_POST['Current_Balance']; 
        $from_acc = $_POST['from_acc'];
        $from_acc_name = $_POST['from_acc_name'];
        $to_acc = $_POST['to_acc'];
        $transfer_amt = $_POST['transfer_amt'];
        
        


        if($to_acc != 0){
            $get_customer = "select Current_Balance from customer where ID=$from_acc";
            $run_customer = mysqli_query($conn, $get_customer);
            if (!$run_customer) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
            $customer = mysqli_fetch_array($run_customer);
            
            if($transfer_amt <= $customer['Current_Balance']) {
                $dec_bal=intval($customer['Current_Balance']) - intval($transfer_amt);
                $f_customer = "update customer set Current_Balance=$dec_bal where ID=$from_acc";
                $run_f_customer = mysqli_query($conn, $f_customer);
                
                $t_customer = "select Current_Balance from customer where ID=$to_acc";
                $run_t_customer = mysqli_query($conn, $t_customer);
                $row_t_customer = mysqli_fetch_array($run_t_customer);
                $to_curr_bal = $row_t_customer['Current_Balance'];
                $incre_bal=intval($to_curr_bal)+intval($transfer_amt);
                $t_customer_1 = "update customer set Current_Balance=$incre_bal where ID=$to_acc";
                $run_t_customer_1 = mysqli_query($conn, $t_customer_1);
                
                
                $insert_transfer = "insert into transfer ( from_acc, from_acc_name, to_acc, transfer_amt) values ($from_acc, '$from_acc_name', $to_acc, $transfer_amt)";
                $run_transfer = mysqli_query($conn, $insert_transfer);
                if($run_transfer==True) {
                    echo '<script>alert("Transfer complete")</script>';
                    echo '<script>window.open("customer.php", "_self")</script>';
                } else {
                    echo '<script>alert("Unable to transfer")</script>';
                }
            } else {
                echo '<script>alert("Insufficient Balance!!!")</script>';
            }
        } else {
            echo '<script>alert("Please select an account!!!")</script>';
        }
    }
?>
