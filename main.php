<!doctype html>
<html class="no-js" lang="en">

<?php
include_once "./control/helper.php";
include_once "./admin/control/connection.php";
session_start();
?>
<?php if (isset($_GET['p'])) {
  $title = implode(" ", explode("_", $_GET['p']));
} else {
  $title = 'Dashboard';
}

$queryMeta = select($c, 'meta');
$meta = array();
foreach ($queryMeta as $value) {
  $meta[$value['kunci']] = $value['value'];
}
?>

<head>
  <meta charset="utf-8">
  <title><?= ucwords($title) ?> - Agrowisata UD. SENTRA JERUK KERINCI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="assets/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/lib/jquery-toast-plugin/dist/jquery.toast.min.css">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <?php include_once "./templates/navbar.php" ?>

    <?php
    if (isset($_GET['p'])) {
      include_once $_GET['p'] . ".php";
    } else {
      include_once "dashboard.php";
    }
    ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="?p=dashboard">Agrowisata UD. SENTRA JERUK KERINCI</a>, All
              Right Reserved.<br>

              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="">Home</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <?php include_once "./templates/modal.php" ?>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/waypoints/waypoints.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

  <!-- Template Javascript -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/alerts.js"></script>

  <?php if (isset($_SESSION['alert'])) {
    echo $_SESSION['alert'];
    unset($_SESSION['alert']);
  } ?>
</body>

</html>