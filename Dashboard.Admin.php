<?php
session_start();
include_once "php/admin.php";
// Check if user is not logged in
if (!isset($_SESSION['UserName'])) {
  header("Location: Admin.php"); // Redirect to login page
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Admin | Dashboard</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

  <!-- Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="Dashboard.Admin.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" />
        <span class="d-none d-lg-block">AdminPanel</span>
      </a>
      <i class="bi bi-text-indent-right toggle-sidebar-btn" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Close SideBar"></i>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="Messages.Admin.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Messages">
            <i class="bi bi-chat-square-quote-fill"></i>
            <?php
            $sql = "SELECT COUNT(*) AS count FROM messages WHERE Status = 'New'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if (!$row['count'] == 0) {
              echo "<span class='badge bg-success badge-number'>" . $row['count'] . "</span>";
            }
            ?>
          </a><!-- End Messages Icon -->
        </li>
        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" data-bs-toggle="dropdown">
            <img src="assets/img/My_Img.jpg" alt="Profile" class="rounded-circle" />
            <span class="d-none d-md-block dropdown-toggle ps-2"></span> </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Welcome, Chief !!</h6>
              <span>Kartik Bambhaniya</span>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="Profile.php" target="_blank">
                <span>Go to Portfolio</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="php/logout.php">
                <i class="bi bi-indent"></i>
                <span>Log Out</span>
              </a>
            </li>
          </ul>
          <!-- End Profile Dropdown Items -->
        </li>
        <!-- End Profile Nav -->
      </ul>
    </nav>
    <!-- End Icons Navigation -->
  </header>
  <!-- End Header -->

  <!-- Sidebar -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Dashboard.Admin.php">
          <i class="bi bi-grid-1x2-fill"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Visiters.Admin.php">
          <i class="bi bi-people-fill"></i>
          <span>Visiters</span>
        </a>
      </li>
      <!-- End Visiters Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Messages.Admin.php">
          <i class="bi bi-chat-square-quote-fill"></i>
          <span>Messages</span>
        </a>
      </li>
      <!-- End Messages Nav -->
    </ul>
  </aside>
  <!-- End Sidebar-->


  <!-- Main -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Admin</li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Right side columns -->
        <div class="col-lg-6">
          <div class="col-xl-4 col-xl-12">

            <!-- Total Visiters -->
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Visiters <span>| Counts</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php

                        $sql = "SELECT COUNT(*) AS total FROM visiters";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                          $row = mysqli_fetch_assoc($result);
                          $VisiterCount = $row['total'];
                          echo $VisiterCount;
                        }
                        ?>
                    </h6>
                    <span class="text-muted small pt-2 ps-1">All Time</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Right side columns -->

        <!-- Right side columns -->
        <div class="col-lg-6">
          <div class="col-xl-4 col-xl-12">

            <!-- Total Visiters -->
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Messages <span>| Counts</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-chat-square-quote-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php

                        $sql = "SELECT COUNT(*) AS total FROM messages";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                          $row = mysqli_fetch_assoc($result);
                          $MessageCount = $row['total'];
                          echo $MessageCount;
                        }
                        ?>
                    </h6>
                    <span class="text-muted small pt-2 ps-1">All Time</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Right side columns -->

      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>