<?php

include "../Model/Config/config.php";

$id_menu = $_GET['id'];

// Fetch categories
$sql = "SELECT DISTINCT name FROM categories WHERE id_from_admin = $id_menu";
$categoriesResult = $conn->query($sql);

// Fetch meals with their category names
$sql = "SELECT meals.*, categories.name AS category_name 
        FROM meals 
        INNER JOIN categories 
        ON meals.categorie = categories.id 
        WHERE meals.id_from_admin = $id_menu 
        AND categories.id_from_admin = $id_menu";

$mealsResult = $conn->query($sql);

// IP

$ip = $_SERVER['REMOTE_ADDR'];

$sql1 = "SELECT * FROM menu WHERE id_from_admin = $id_menu AND ip = '$ip'";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) == 0) {
  $sql2 = "INSERT INTO menu (id_from_admin, ip) VALUES ('$id_menu', '$ip')";
  if (mysqli_query($conn, $sql2)) {
  } else {
      echo "Error: " . mysqli_error($conn);
  }
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Isotope CSS (for filtering) -->
  <link href="assets/vendor/isotope-layout/isotope.pkgd.min.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php while($category = $categoriesResult->fetch_assoc()): ?>
                <li data-filter=".filter-<?php echo strtolower(str_replace(' ', '-', $category['name'])); ?>"><?php echo htmlspecialchars($category['name']); ?></li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          <?php while($meal = $mealsResult->fetch_assoc()): ?>
          <div class="col-lg-6 menu-item filter-<?php echo strtolower(str_replace(' ', '-', $meal['category_name'])); ?>">
            <img style="min-height:70px;" src="../../assets/img/meals/<?php echo htmlspecialchars($meal['img']); ?>" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo htmlspecialchars($meal['name']); ?></a><span>$<?php echo htmlspecialchars($meal['prix']); ?></span>
            </div>
            <div class="menu-ingredients">
              <?php echo htmlspecialchars($meal['discretion']); ?>
            </div>
          </div>
          <?php endwhile; ?>
        </div>

      </div>
    </section><!-- End Menu Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Initialize Isotope
    var menuIsotope = new Isotope('.menu-container', {
      itemSelector: '.menu-item',
      layoutMode: 'fitRows'
    });

    // Menu filter
    document.querySelectorAll('#menu-flters li').forEach(function(el) {
      el.addEventListener('click', function() {
        document.querySelectorAll('#menu-flters li').forEach(function(filter) {
          filter.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        menuIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
      });
    });
  </script>

</body>

</html>

<?php $conn->close(); ?>
