
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
      .custom-button {
    --bs-btn-padding-y: .25rem;
    --bs-btn-padding-x: 3rem;
    --bs-btn-font-size: 3rem;
    box-shadow: 0 9px #111;
    font-family: verdana;
    font-size: 50px;
    transition: box-shadow 0.2s, transform 0.2s;
  }
  
  .custom-button:active {
    box-shadow: 0 5px #111;
    transform: translateY(4px);
  }
    </style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" style="background-color: #efffff;">
  <div class="container-fluid d-flex justify-content-around">
    <a class="navbar-brand" href="#">
      <h4 class="display-6">AnyFood<small class="text-body-secondary">-AdminHub</small></h4>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="d-flex align-items-center vh-100">
      <div class="mx-auto">
        <h6 class="text-center display-4">There is no data here!</h6>
        <br/>
        <a href="homepageAdminAddData.php"><center><button class="btn btn-success btn-lg custom-button" ><h2 style="font-family:verdana; font-size: 50px;">+</h2></button></center></a>
        <br/>
        <center><h3>Add now!</h3></center>
      </div>
    </div>
  </div>

<?php

?>

    
</body>
</html>