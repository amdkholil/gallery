<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Gallery Axemma</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/js/justified/jquery.justified.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/lineicons/style.css">  
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?= base_url(); ?>" class="logo"><b>Gallery Axemma</b></a>
            <!--logo end-->

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?= base_url(); ?>admin/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><img src="<?= base_url(); ?>assets/img/profil.jpg" class="img-circle" width="100"></p>
              	  <h5 class="centered">Ahmad Kholil</h5>

                  <li class="mt">
                      <a href="<?= base_url(); ?>admin/index">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-folder-open"></i>
                          <span>Album</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url(); ?>admin/add_album"><i class="fa fa-plus-square"></i>Tambah Album</a></li>
                          <li><a  href="<?= base_url(); ?>admin/view_album"><i class="fa fa-eye"></i>Lihat Album</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-image"></i>
                          <span>Foto</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= base_url(); ?>admin/upload_photo"><i class="fa fa-upload"></i>Upload Foto</a></li>
                          <li><a  href="<?= base_url(); ?>admin/photos"><i class="fa fa-wrench"></i>Manajemen Foto</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Pengguna</span>
                      </a>
                      <ul class="sub">
                          <li><a  href=""><i class="fa fa-plus-square"></i>Tambah Pengguna</a></li>
                          <li><a  href=""><i class="fa fa-edit"></i>Ubah Informasi</i></a></li>
                          <li><a  href=""><i class="fa fa-lock"></i>Ganti Password</i></a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->

                  <?php echo $contents; ?>

<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!------------------------------------------------------------------------- -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Gallery Axemma &copy; 2018 by Kholil
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url(); ?>assets/js/fancybox/jquery.fancybox.js"></script>   
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?= base_url(); ?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
