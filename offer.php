<?php
  $title = "Offer";
  $css = "<!-- Icons CSS (services / employers) --><link rel=\"stylesheet\" href=\"css/icons.css\">";
  $js = "";

  include_once "includes/db.php";
  include_once "includes/functions.php";
  include_once "includes/header.php";
?>

    <!-- Header Page -->
    <div class="container-fluid background-texture">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="header-page">Offer</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Page -->

    <!-- Content -->
    <div class="container">
      <div class="row page-header">
          <h3>Apply right now</h3>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="thumbnail pull-left col-xs-12 col-sm-4 col-md-12 col-lg-12">
            <img src="http://placehold.it/800x500" alt="">
          </div>
          <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12">
            <h3><a href="profile.php">Company Name</a></h3>
            <p><b>Location</b> : <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Toronto</p>
            <p><b>Email</b> : company@domain.com</p>
            <p><b><abbr title="Phone">P:</abbr></b> (123) 456-7890</p>
            <address>
                <p><b>Address</b> : 777 avenue Robert Bourassa, Montreal, QC H3C 3Z7, Canada</p>
            </address>
          </div>
          <div class="col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-12 col-lg-offset-0 col-lg-12">
            <a href="contact.php" class="btn btn-primary btn-block">Contact</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
          <h3>Technical manager</h3>
          <p>Internship / <a href="profile.php">Company Name</a> (the content of the profile page will be different (student or enteprise) / <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 2 month / <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Toronto</p>
          <p><b>Description</b> : </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p><b>Desired skills</b> : </p>
          <p>Engineer : C / C++ / JAVA</p>
        </div>
      </div>
    </div>
    <!-- End Content -->

<?php include_once "includes/footer.php"; ?>