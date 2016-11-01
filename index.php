<?php
  $title = "Index";
  $css = "<!-- Index CSS --><link rel=\"stylesheet\" href=\"css/index.css\"><!-- Icons CSS (services / employers) --><link rel=\"stylesheet\" href=\"css/icons.css\">";
  $js = "<script src=\"js/index.js\"></script>";

  include_once "includes/db.php";
  include_once "includes/functions.php";
  include_once "includes/header.php";
?>
    <!-- Caroussel -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active"> 
          <img alt="" src="img/img1.jpg" class="responsive">
          <div class="carousel-caption">
            <div class="full-width text-center">
              <h1 class="text-uppercase">Your career starts here</h1>
              <h3>Through our network of students and companies from EFREI, start your professional career here</h3>
            </div>
          </div>
        </div>
        <div class="item"> 
          <img alt="" src="img/img2.jpg" class="responsive">
          <div class="carousel-caption">
            <div class="full-width text-center">
              <h1 class="text-uppercase">Find your next job now</h1>
              <h3>Find a job that interests you and that makes you want to work</h3>
            </div>
          </div>
        </div>
        <div class="item"> 
          <img alt="" src="img/img3.jpg" class="responsive">
          <div class="carousel-caption">
            <div class="full-width text-center">
              <h1 class="text-uppercase">Find your future employer</h1>
              <h3>Choose a company whose culture, project and team who looks like you</h3>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
    <!-- End Caroussel -->

    <!-- Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 page-header">
          <h3>Services</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 services">
          <span class="glyphicon glyphicon-briefcase index-icon"></span>
          <h4>Network of companies</h4>
          <p>Use our professional network to find your employer !</p>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 services">
          <span class="glyphicon glyphicon-user index-icon"></span>
          <h4>Teamwork</h4>
          <p>Enjoy your work with a great team !</p>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 services">
          <span class="glyphicon glyphicon-education index-icon"></span>
          <h4>Qualified students</h4>
          <p>Our certified students are involved in their work !</p>
        </div>
      </div>
    </div>

    <div class="container-fluid background-lightgrey">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 page-header">
            <h3>Companies</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 companies">
            <div class="thumbnail">
              <img src="img/openclassrooms.png" alt="OpenClassrooms" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 companies">
            <div class="thumbnail">
              <img src="img/dassault_systemes.png" alt="Dassault Systemes" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 companies">
            <div class="thumbnail">
              <img src="img/BNP.png" alt="BNP Paribas" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 companies">
            <div class="thumbnail">
              <img src="img/SFR.png" alt="SFR" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 companies">
            <div class="thumbnail">
              <img src="img/thales.png" alt="Thales" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 companies">
            <div class="thumbnail">
              <img src="img/AXA.png" alt="AXA" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 page-header">
          <h3>Last students</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 last-students">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <h4>Full Name</h4>
            <p>user@domain.com</p>
            <p>Skills : C / C++</p>
            <a href="contact.php" class="btn btn-primary btn-block">Contact</a>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 last-students">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <h4>Full Name</h4>
            <p>user@domain.com</p>
            <p>Skills : C / C++</p>
            <a href="contact.php" class="btn btn-primary btn-block">Contact</a>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 last-students">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <h4>Full Name</h4>
            <p>user@domain.com</p>
            <p>Skills : C / C++</p>
            <a href="contact.php" class="btn btn-primary btn-block">Contact</a>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 last-students">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <h4>Full Name</h4>
            <p>user@domain.com</p>
            <p>Skills : C / C++</p>
            <a href="contact.php" class="btn btn-primary btn-block">Contact</a>
          </div>
        </div>
      </div>
    </div>    
    <!-- End Content -->

<?php include_once "includes/footer.php"; ?>   