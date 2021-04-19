<!doctype html>
<html lang="en">
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
          <a class="nav-link active" href="#">Contact Us</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="container my-4">
  <h2>Contact Us
  </h2>
  <form method="post" action="mailto:harshal.ambalkar.3@gmail.com" >
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<select class="form-select" aria-label="Default select example">
  <option selected>Are you unable to</option>
  <option value="1">Transfer Money</option>
  <option value="2">View History</option>
  <option value="3">Other</option>
</select>
<div class="mb-3 my-4">
  <label for="exampleFormControlTextarea1" class="form-label">What's your problem?</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <button onclick="sendEmail(harshal.ambalkar.3@gmail.com)" class="btn btn-outline-primary my-4">Submit</button>
<p id="mailStatus"></p>
</div>
</form>
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