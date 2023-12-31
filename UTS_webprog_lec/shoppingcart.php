<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mam Pus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .custom-alert{
        width:80%;
      }
      custom-button {
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
<nav class="navbar sticky-top navbar-expand-lg" style="background-image: linear-gradient(#6d25bb,#a12da4, #d36172);" data-bs-theme="dark">
    <div class="container-fluid d-flex ">
        <a class="navbar-brand" href="homepageUser.php">
            <h4 class="display-5">< <small style="color:#EEE;">go back</small></h4>
        </a>
        <a class="navbar-brand" href="#">
            <h1>SHOPPING CART</h1>
        </a>
    </div>
   
</nav>
      <div class="text-center"> <!-- Tambahkan div untuk mengatur gambar di tengah -->
                <img class="rounded-circle mt-5 mx-auto" src="gambar1.png" alt="" style="width: 70px;">
            </div>
          <p class="text-center fw-bold fs-1">MEALS</p>
    </div>
    <?php
$con = mysqli_connect("localhost", "root", "", "restoran_database");
$q = "SELECT * FROM shopping";
$q4 = "SELECT SUM(Price) AS TotalPrice FROM shopping"; // Mengambil total harga

if (isset($_GET['Name'])){  
    $q3 = "DELETE FROM shopping WHERE Name='".$_GET['Name']."'";
    $queryDelete = mysqli_query($con, $q3);
}
if (isset($_GET['Pay'])){  
    $q5 = "DELETE FROM shopping";
    $queryDelete = mysqli_query($con, $q5);
}

$query = mysqli_query($con, $q);
$totalPriceQuery = mysqli_query($con, $q4); // Menjalankan query total harga
$totalPriceResult = mysqli_fetch_assoc($totalPriceQuery);
$totalPrice = $totalPriceResult['TotalPrice']; // Mengambil total harga dari hasil query

if (mysqli_num_rows($query) == 0) {
  echo '<div class="container">
  <div class="d-flex align-items-center vh-100">
    <div class="mx-auto">
      <h6 class="text-center display-4">Tidak ada pesanan untuk sekarangq!</h6>
      <br/>
      
    </div>
  </div>
  </div>';
} else {
    echo "<div class='container-xl table-responsive'>";
    echo "<br/>";
    echo '<table class="table table-striped table-bordered">';
    echo '<thead>';
    echo '<tr class="table-dark ">';
    echo '<th >No.</th>';
    echo '<th>Name</th>';
    echo '<th>Price</th>';
    echo '<th><center>Hapus</center></th>';
    echo '</tr>';
    echo '</thead>';
    $counter = 1;
    echo '<tbody class="table-group-divider">';
    while ($hasil = mysqli_fetch_array($query)) {
      echo "<tr class='table-info'>";
      echo "<td>$counter</td>";
      echo "<td>{$hasil['Name']}</td>";
      echo "<td>{$hasil['Price']}</td>";
      echo '<td class="align-middle text-center"><div class="container">
        <div class="mx-auto">
            <center>
              <form method="post" action="shoppingcart.php?Name=' . $hasil["Name"] . '" onsubmit="return confirm(\'Are you sure you want to delete '.$hasil["Name"].'?\');">
              <button type="submit" class="btn btn-danger btn-lg custom-button2">
                <h2 style="font-family: verdana; font-size: 20px;">X</h2>
              </button>
              </form>
            </center>
        </div>
      </div></td>';
      echo "</tr>";
      $counter++;
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    mysqli_close($con);

    // Menampilkan total harga
    echo '<center><div>';
    echo 'Total harga: ' . $totalPrice;
    echo '</div></center>';

    echo '
<br/><div class="container">
<div class="d-flex align-items-center">
  <div class="mx-auto">
    <a href="shoppingcart.php?Pay=done">
      <center>
        <button class="btn btn-success btn-lg custom-button">
          <h2 style="font-family: verdana; font-size: 50px;">PAY</h2>
        </button>
      </center>
    </a>
    <br/>
  </div>
</div>
</div>';
}
?>

    <div class="text-center"> <!-- Tambahkan div untuk mengatur gambar di tengah -->
        <img class="rounded-circle mt-5 mx-auto" src="gambar1.png" alt="" style="width: 70px;">
    </div>
  <div class="mt-5">
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active text-dark" aria-disabled="true" aria-current="page" href="#">MENU</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" aria-disabled="true" href="#">FAQS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" aria-disabled="true">CONTACT US</a>
    </li>
  </ul>
</div>
  <div class="container">
    <ul class="list-inline">
        <li class="list-inline-item">
            <a href=""><img src="./gambar/logokecil.jpg" alt="" class="img-fluid"></a>
        </li>
        <li class="list-inline-item">
            <a class="nav-link fs-6 fw-lighter" aria-disabled="true" href="">TACO BELL, the BELL design and related marks are trademarks of Taco Bell Corp. ©2020 Taco Bell Corp, all rights reserved.</a>
        </li>
        <li class="list-inline-item">
            <a class="nav-link fw-semibold" aria-disabled="true" href="">PRIVACY POLICY</a>
        </li>
    </ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
