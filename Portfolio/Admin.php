<?php
include_once "php/admin.php";
// Check if user is not logged in
if (isset($_SESSION['UserName'])) {
  header("Location: Dashboard.Admin.php"); // Redirect to login page
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kartik Admin | Login</title>
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/Full_Logo.png" />
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Welcome Cheif !!</h5>
                    <p class="text-center small">Please login to enter in AdminPanel...</p>
                  </div>

                  <form method="POST" action="php/admin.php" class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <input type="text" name="UserName" class="form-control" id="yourUsername" placeholder="Username"
                        required>
                      <div class="invalid-feedback">Please Enter Your Username ...</div>
                    </div>

                    <div class="col-12">
                      <input type="password" name="Password" class="form-control" id="yourPassword"
                        placeholder="Password" required>
                      <div class="invalid-feedback">Please Enter Your Password !!!</div>
                    </div>

                    <div class="col-12 text-center">
                      <button class="btn btn-outline-primary w-25" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Need <a href="pages-error-404.html">Help</a> ?</p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>