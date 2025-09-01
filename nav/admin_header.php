<?php


require '../model/db.php'; // connect to DB

#-----------------------------------------------------------------#
#--             HomePage carousel feature						--#
#-----------------------------------------------------------------#
//get carousel images
$get_cft_sql = "SELECT * FROM carousel_ft_db";
//run query
$get_cft_query = mysqli_query($conn, $get_cft_sql);

#-----------------------------------------------------------------#
#--             HomePage hero feature							--#
#-----------------------------------------------------------------#
//get hero images
$get_hft_sql = "SELECT * FROM hero_ft_db";
//run query
$get_hft_query = mysqli_query($conn, $get_hft_sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PhilippineTouristD</title>
    <link rel="icon" type="image/x-icon" href="../Img/Its-More-Fun-In-The-Philippines-Logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheets" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
        }

        .sidebar {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .topbar {
            height: 60px;
            background-color: white;
        }

        .table-container {
            max-height: 500px;
            overflow-y: auto;
            text-align: center;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/style.css" rel="stylesheet">
</head>


<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">PhilippineTouristD</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="../views/logout.php">Sign out</a>
            </li>
        </ul>
    </nav>

    <!-- Main Container -->
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span style="color: white;">MAIN</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="../views/dashboard.php" style="color: white;">
                                &#128200; Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/inquiry.php" style="color: white;">
                                &#128233; Inquiry
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span style="color: white;">PAGES</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item"><a class="nav-link" href="../views/home.php" style="color: white;">&#127968; Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="underConstruction()" style="color: white;">&#128196; Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="underConstruction()" style="color: white;">&#128222; Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="underConstruction()" style="color: white;">&#128196; Explore</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="underConstruction()" style="color: white;">&#128196; Footer</a></li>
                    </ul>
                </div>
            </nav>