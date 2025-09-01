<?php include '../model/db.php' ?>

<br><br><br><br>
<?php
#--------------------------------------------------------------#
#-- Carousel Featured destination							 --#
#--------------------------------------------------------------#
//getl the carousel featured destination
$carousel_sql = "SELECT * FROM `carousel_ft_db`";
$carousel_query = mysqli_query($conn, $carousel_sql);
$carousel = mysqli_fetch_all($carousel_query);
//print_r($carousel);

#--------------------------------------------------------------#
#-- Hero Featured destination								 --#
#--------------------------------------------------------------#
//get hero featured destination sql
$hero_sql = "SELECT * FROM hero_ft_db";
$hero_query = mysqli_query($conn, $hero_sql);
$hero = mysqli_fetch_all($hero_query);
//print_r($hero);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Philippine TouristD</title>
    <link rel="icon" type="image/logo" href="../Img/Its-More-Fun-In-The-Philippines-Logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="font-size:25px">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://pinaywise.com/wp-content/uploads/2024/02/Its-More-Fun-In-The-Philippines-Logo.jpg"
                    alt="Philippine Logo" height="50" width="70" style="border-radius:10px">
            </a>
            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link <?= ($this->page == 'Home') ? 'active' : '' ?>" href="../?page=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($this->page == 'Service') ? 'active' : '' ?>" href="Service.php?">Services</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($this->page == 'Contact') ? 'active' : '' ?>" href="contact.php?">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->page == 'Authenticate') ? 'active' : '' ?>" href="authenticate.php?">Login</a>
                    </li>
                    <li class="nav-item"><a class="nav-link actives" href="EXPLORE.php">Explore!</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    if (isset($_SESSION['error'])) {
        echo "<script>alert('{$_SESSION['error']}');</script>";
        unset($_SESSION['error']);
    }


    ?>