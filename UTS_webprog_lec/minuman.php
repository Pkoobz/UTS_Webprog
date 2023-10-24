<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mam Pus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      
    </style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg" style="background-image: linear-gradient(#6d25bb,#a12da4, #d36172);" data-bs-theme="dark">
    <div class="container-fluid d-flex ">
        <a class="navbar-brand" href="homepageUser.php">
            <h4 class="display-5">< <small style="color:#EEE;">go back</small></h4>
        </a>
        <a class="navbar-brand" href="#">
            <h1>Minuman</h1>
        </a>
    </div>
   
</nav>
      <div class="text-center"> <!-- Tambahkan div untuk mengatur gambar di tengah -->
                <img class="rounded-circle mt-5 mx-auto" src="gambar1.png" alt="" style="width: 70px;">
            </div>
          <p class="text-center fw-bold fs-1">DRINKS</p>
    </div>
    <?php
$con = mysqli_connect("localhost", "root", "", "restoran_database");
$q = "SELECT * FROM `food data` WHERE Type='Drink'";

if (isset($_GET['Name'], $_GET['Price'])) {
    $name = $_GET['Name'];
    $price = $_GET['Price'];
    $stmt = $con->prepare("INSERT INTO shopping (Name, Price) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $price);
    if ($stmt->execute()) {
        echo '<center><div class="alert alert-success custom-alert" role="alert">Pesanan kamu berhasil tersimpan.</div></center>';
    } else {
        echo "Upss.. terjadi kesalahan, coba lagi.";
    }
    $stmt->close();
}

$query = mysqli_query($con, $q);

if (mysqli_num_rows($query) == 0) {
  echo '<div class="container">
  <div class="d-flex align-items-center vh-100">
    <div class="mx-auto">
      <h6 class="text-center display-4">There is no menu for now!</h6>
    </div>
  </div>
  </div>';
} else {
    echo '<center><div class="container">';
    echo '<div class="row row-cols-1 row-cols-md-3 g-4 justify-content-evenly" >'; // Menggunakan grid dengan 3 kolom
    
    while ($hasil = mysqli_fetch_array($query)) {
        echo '
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="' . $hasil['Photo'] . '" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $hasil['Name'] . '</h5>
                    <p class="card-text">' . $hasil['Description'] . '</p>
                    <p class="card-text">' . $hasil['Price'] . '</p>
                    <a href="meal.php?Name=' . $hasil["Name"] . '&Price=' . $hasil["Price"] . '" class="btn btn-primary">Order here</a>
                </div>
            </div>
        </div>';
    }
    
    echo '</div>';
    echo '</div></center>';


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
