<?php
  $title = "Job offers";
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
            <h2 class="header-page">Job offers</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Page -->

    <!-- Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hidden-xs col-sm-2 col-md-2 col-lg-2 text-center">
            <span class="glyphicon glyphicon-education index-icon" aria-hidden="true"></span>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <h3><a href="offer.php">Leader</a></h3>
            <p>Internship / <a href="profile.php">Company Name</a> / <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 1 month / <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Montreal</p>
            <p>Small description : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="hidden-xs col-sm-2 col-md-2 col-lg-2 text-center">
            <span class="glyphicon glyphicon-education index-icon" aria-hidden="true"></span>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <h3><a href="offer.php">Technical manager</a></h3>
            <p>Internship / <a href="profile.php">Company Name</a> / <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 2 month / <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Toronto</p>
            <p>Small description : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="hidden-xs col-sm-2 col-md-2 col-lg-2 text-center">
            <span class="glyphicon glyphicon-briefcase index-icon" aria-hidden="true"></span>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <h3><a href="offer.php">Editor</a></h3>
            <p>Job / <a href="profile.php">Company Name</a> / <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Ottawa</p>
            <p>Small description : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          </div>
        </div>
        <div class="col-lg-12 text-center">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- End Content -->

<?php include_once "includes/footer.php"; ?>