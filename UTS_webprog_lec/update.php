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
    </style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" style="background-color: #efffff;">
    <div class="container-fluid d-flex ">
        <a class="navbar-brand" href="homepageAdmin.php">
            <h4 class="display-5">< <small class="text-body-secondary">go back</small></h4>
        </a>
        <a class="navbar-brand" href="#">
            <h4 class="display-6">Update Data</h4>
        </a>
    </div>
</nav>
<br/>
<?php

$con = mysqli_connect(
    "localhost", "root", "", "restoran_testing");
$data = [
    'Name' => '',
    'Price' => '',
    'Type' => '',
    'Description' => '',
    'Photo' => '',
];

$errors = array(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Add"])) {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $price = isset($_POST["price"]) ? $_POST["price"] : "";
    $type = isset($_POST["type"]) ? $_POST["type"] : "";
    $description = isset($_POST["description"]) ? $_POST["description"] : "";

    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    }
    if (empty($_POST['price'])) {
        $errors[] = "Price is required.";
    }
    if (empty($_POST['type'])) {
        $errors[] = "Type is required.";
    }
    if (empty($_POST['description'])) {
        $errors[] = "Description is required.";
    }

    if (empty($errors)) {
        $escapedName = mysqli_real_escape_string($con, $_POST['name']);
        $escapedOldName = mysqli_real_escape_string($con, $_POST['old_name']);
        
        $q2 = "UPDATE `food data` SET Name = '$escapedName', Price = '$price', Type = '$type', Description = '$description' WHERE Name = '$escapedOldName'";
        
        $queryUpdate = mysqli_query($con, $q2);

        if ($queryUpdate){
            header("Location: homepageAdmin.php");
            exit;
        }
    }

    if (!empty($errors)) {
        echo '<div class="alert alert-danger custom-alert" role="alert">';
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}

// Retrieve values from URL parameters
if (isset($_GET['Name'])) {
    $data['Name'] = $_GET['Name'];
}
if (isset($_GET['Price'])) {
    $data['Price'] = $_GET['Price'];
}
if (isset($_GET['Type'])) {
    $data['Type'] = $_GET['Type'];
}
if (isset($_GET['Description'])) {
    $data['Description'] = $_GET['Description'];
}
?>

<div class="container-md">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label"><h5>Name</h5></label>
            <input type="text" class="form-control custom-input" id="name" name="name" value="<?php echo $data['Name']; ?>">
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label"><h5>Price</h5></label>
            <input type="number" class="form-control custom-input" id="price" name="price" value="<?php echo $data['Price']; ?>">
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label"><h5>Type</h5></label>
            <select class="form-select custom-input" id="type" name="type">
                <option selected>Choose...</option>
                <option value="Food" <?php echo ($data['Type'] === 'Food') ? 'selected' : ''; ?>>Food</option>
                <option value="Drink" <?php echo ($data['Type'] === 'Drink') ? 'selected' : ''; ?>>Drink</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label"><h5>Description</h5></label>
            <textarea class="form-control custom-input" name="description"><?php echo $data['Description']; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label"><h5>Photo</h5></label>
            <input type="file" class="form-control custom-input" id="photo" name="photo" value="<?php echo $data['Photo']; ?>">
        </div>
        <input type="hidden" name="old_name" value="<?php echo $data['Name']; ?>">
        <br />
        <center>
            <button type="submit" class="btn btn-primary custom-button" name="Add"><h2 style="font-family: verdana; font-size: 40px;">Update</h2></button>
        </center>
    </form>
</div>
</body>
</html>
