<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Half Slider - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/template/css/bootstrap.min.css" rel="stylesheet">

  	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
      <link href="<?= base_url(); ?>assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
  	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/thumbnail-gallery.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/template/half-slider.css" rel="stylesheet">

  </head>

  <body>

      <?php
      $a = $this->uri->segment(2);
       ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">Gallery Axemma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo $a==='index' ? 'active' : ''; ?>">
              <a class="nav-link" href="<?= base_url(); ?>home/index">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?php echo $a==='photo' ? 'active' : ''; ?>">
              <a class="nav-link" href="<?= base_url(); ?>home/photo">Photo</a>
            </li>
            <li class="nav-item <?= $a=='index'?'class="active"':''; ?>">
              <a class="nav-link" href="<?= base_url(); ?>abotme">About me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <!-- Page Content -->
    <div style="min-height:500px;">

        <?php echo $contents; ?>

    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Gallery Axemma 2018 by Ahmad Kholil</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <!-- jQuery -->
  	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
  	<!-- jQuery Easing -->
  	<script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
  	<!-- Bootstrap -->
  	<script src="<?= base_url(); ?>assets/template/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/template/js/bootstrap.min.js"></script>
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  	<!-- Stellar -->
  	<script src="<?= base_url(); ?>assets/js/jquery.stellar.min.js"></script>
  	<!-- Waypoints -->
  	<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
  	<!-- Counters -->
  	<script src="<?= base_url(); ?>assets/js/jquery.countTo.js"></script>
      <script src="<?= base_url(); ?>assets/js/fancybox/jquery.fancybox.js"></script>

      <script type="text/javascript" src="<?= base_url(); ?>assets/template/gulpfile.js">

      </script>


  	<!-- MAIN JS -->
  	<script src="<?= base_url(); ?>assets/js/main.js"></script>

  </body>

</html>
