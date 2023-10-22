<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
      .custom-button {
        --bs-btn-padding-y: .25rem;
        --bs-btn-padding-x: 3rem;
        --bs-btn-font-size: 3rem;
        box-shadow: 0 9px #111;
        transition: box-shadow 0.2s, transform 0.2s;
      }

      .custom-button:active {
        box-shadow: 0 5px #111;
        transform: translateY(4px);
      }
      .custom-button2 {
        --bs-btn-padding-y: .25rem;
        --bs-btn-padding-x: 1rem;
        --bs-btn-font-size: 3rem;
        box-shadow: 0 9px #111;
        transition: box-shadow 0.2s, transform 0.2s;
      }

      .custom-button2:active {
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

<?php
$con = mysqli_connect("localhost", "root", "", "restoran_testing");
$q = "SELECT * FROM `food data`";

if (isset($_GET['Name'])){  
    $q3 = "DELETE FROM `food data` WHERE Name='".$_GET['Name']."'";
    $queryDelete = mysqli_query($con, $q3);
}
$query = mysqli_query($con, $q);

if (mysqli_num_rows($query) == 0) {
  echo '<div class="container">
  <div class="d-flex align-items-center vh-100">
    <div class="mx-auto">
      <h6 class="text-center display-4">There is no data here!</h6>
      <br/>
      <a href="homepageAdminAddData.php">
        <center>
          <button class="btn btn-success btn-lg custom-button">
            <h2 style="font-family: verdana; font-size: 50px;">+</h2>
          </button>
        </center>
      </a>
      <br/>
      <center><h3>Add now!</h3></center>
    </div>
  </div>
  </div>';
} else {
  echo '<table border="1">';
  echo '<tr>';
  echo '<th>No.</th>';
  echo '<th>Name</th>';
  echo '<th>Price</th>';
  echo '<th>Type</th>';
  echo '<th>Description</th>';
  echo '<th>photo</th>';
  echo '<th>Hapus</th>';
  echo '<th>Edit</th>';
  echo '</tr>';
  $counter = 1;
while ($hasil = mysqli_fetch_array($query)) {
  echo "<tr>";
  echo "<td>$counter</td>";
  echo "<td>{$hasil['Name']}</td>";
  echo "<td>{$hasil['Price']}</td>";
  echo "<td>{$hasil['Type']}</td>";
  echo "<td>{$hasil['Description']}</td>";
  echo "<td><img src='./image/{$hasil['Photo']}' style='width: 50px; height: 50px;'></td>";
  echo '<td><div class="container">
    <div class="mx-auto">
    <a href="homepageAdmin.php?Name=' . $hasil["Name"] . '">
        <center>
          <button class="btn btn-danger btn-lg custom-button2">
            <h2 style="font-family: verdana; font-size: 20px;">X</h2>
          </button>
        </center>
      </a>
    </div>
  </div></td>';
  echo '<td><div class="container">
    <div class="mx-auto">
    <a href="update.php?Name=' . $hasil["Name"] . '&Price=' . $hasil["Price"] . '&Type=' . $hasil["Type"] . '&Description=' . $hasil["Description"] . '&Photo=' . $hasil["Photo"] . '">
        <center>
          <button class="btn btn-primary btn-lg custom-button2">
            <h2 style="font-family: verdana; font-size: 20px;">Edit</h2>
          </button>
        </center>
      </a>
    </div>
  </div></td>';
  echo "</tr>";
  $counter++;
  
}

echo '</table>';
mysqli_close($con);
echo '<div class="container">
<div class="d-flex align-items-center vh-100">
  <div class="mx-auto">
    <a href="homepageAdminAddData.php">
      <center>
        <button class="btn btn-success btn-lg custom-button">
          <h2 style="font-family: verdana; font-size: 50px;">+</h2>
        </button>
      </center>
    </a>
    <br/>
    <center><h3>Add New Data!</h3></center>
  </div>
</div>
</div>';
}

?>
</body>
</html>
