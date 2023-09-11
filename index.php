<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
  include "./split/link.php";  
  ?>
</head>
<body>
    

    <?php
  include "./split/topbar.php";
  ?>
  <!-- ======= Header ======= -->
  <?php 
  include "./split/header.php";
  ?>

  <!-- ======= Hero Section ======= -->
 <?php 
 include "./split/hero.php";
 ?>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <?php
    include "./split/featuredservice.php";
    ?>
    <!-- ======= About Section ======= -->
    <?php
    include "./split/about.php";
    ?>
    <!-- ======= Skills Section ======= -->
    <?php
    include "./split/skill.php";
    ?>

    <!-- ======= Counts Section ======= -->
    <?php
    include "./split/count.php";
    ?>

    <!-- ======= Clients Section ======= -->
    <?php
    include "./split/client.php";
    ?>
    <!-- ======= Services Section ======= -->
    <?php
    include "./split/service.php";
    ?>
    <!-- ======= Testimonials Section ======= -->
    <?php
    include "./split/testimonial.php";
    ?>

    <!-- ======= Portfolio Section ======= -->
    <?php
    include "./split/portfolio.php";
    ?>

    <!-- ======= Team Section ======= -->
    <?php
    include "./split/team.php";
    ?>

    <!-- ======= Pricing Section ======= -->
    <?php
    include "./split/pricing.php";
    ?>


    <!-- ======= Questions Section ======= -->
    <?php
    include "./split/questions.php";
    ?>

    <!-- ======= Contact Section ======= -->
    <?php
    include "./split/contact.php";
    ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    include "./split/footer.php";
    ?>

<?php
    include "./split/scrolltopbutton.php";
    ?>
  <?php
    include "./split/linkvendorjs.php";
    ?>


</body>
</html>
