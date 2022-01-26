<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

  <!-- sidebar -->
  <?php include 'partials/head.php' ?>

  <body class="hold-transition sidebar-mini">
  <div class="wrapper">
  <!-- sidebar -->
    <?php include 'partials/nav.php' ?>

    <!-- sidebar -->
    <?php include 'partials/sidebar.php' ?>

    <!-- content -->
    <div class="content-wrapper">
    <?php include "route.php" ?>
    </div>
    <!-- sidebar -->
    <?php include 'partials/control.php' ?>
    <!-- footer -->
    <?php include 'partials/footer.php' ?>
</div>
</body>

<!-- REQUIRED SCRIPTS -->
<?php include 'partials/script.php' ?>
</html>
