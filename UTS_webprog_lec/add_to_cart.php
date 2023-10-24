<?php
session_start();
$total_price = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .cart-table {
            width: 70%;
            margin: 0 auto; 
        }
        .total-price {
            text-align: center;
            font-size: 24px; 
            margin-top: 20px; 
        }
    </style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg" style="background-image: linear-gradient(#6d25bb,#a12da4, #d36172);" data-bs-theme="dark">
    <div class="container-fluid d-flex ">
        <a class="navbar-brand" href="javascript:history.go(-1);">
            <h4 class="display-5">< <small style="color:#EEE;">go back</small></h4>
        </a>
    </div>
</nav>
    </div>
</nav>
<h1 class="text-center">Shopping Cart</h1>
<div class="container">
    <table class="table cart-table">
        <thead>
            <tr>
                <th>Food Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $cart_item) {
                    echo '<tr>';
                    echo '<td>' . $cart_item['food_name'] . '</td>';
                    echo '<td>$' . $cart_item['food_price'] . '</td>';
                    echo '</tr>';
                    $total_price += $cart_item['food_price'];
                }
            }
            ?>
        </tbody>
    </table>
    <p class="total-price">Total Price: $<?php echo $total_price; ?></p>
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
</body>
</html>

