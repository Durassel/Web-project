<?php
  $title = "Students";
  $css = "<!-- Student CSS --><link rel=\"stylesheet\" href=\"css/student.css\">";
  $js = "<script src=\"js/jquery.easing.min.js\"></script><!-- Scroll --><script src=\"js/main.js\"></script>";

  include_once "includes/db.php";
  include_once "includes/functions.php";
  include_once "includes/header.php";
?>

    <!-- Header Page -->
    <div class="container-fluid background-texture">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="header-page">Look for your student :
            <small>
                <a class="page-scroll" href="#C">C</a> /
                <a class="page-scroll" href="#JAVA">Java</a> /
                <a class="page-scroll" href="#CPP">C++</a> /
                <a class="page-scroll" href="#HTML">HTML - CSS</a>
            </small>
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Page -->

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Skills</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 id="C">C</h3>
            </div>
        </div>
        <div class="row text-center">
            <div id="carousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-content">
                    <div class="carousel-inner">
                        <div class="item active"> 
                            <div class="col-md-3 col-sm-6 hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item"> 
                            <div class="col-md-3 col-sm-6 hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel1" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel1" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <a href="#">More details</a>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 id="CPP">C++</h3>
            </div>
        </div>
        <div class="row text-center">
            <div id="carousel2" class="carousel slide" data-ride="carousel">
                <div class="carousel-content">
                    <div class="carousel-inner">
                        <div class="item active"> 
                            <div class="col-md-3 col-sm-6 hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item"> 
                            <div class="col-md-3 col-sm-6 hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel2" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel2" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <a href="#">More details</a>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 id="JAVA">Java</h3>
            </div>
        </div>
        <div class="row text-center">
            <div id="carousel3" class="carousel slide" data-ride="carousel">
                <div class="carousel-content">
                    <div class="carousel-inner">
                        <div class="item active"> 
                            <div class="col-md-3 col-sm-6 hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item"> 
                            <div class="col-md-3 col-sm-6 hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel3" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel3" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <a href="#">More details</a>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <h3 id="HTML">HTML - CSS</h3>
            </div>
        </div>
        <div class="row text-center">
            <div id="carousel4" class="carousel slide" data-ride="carousel">
                <div class="carousel-content">
                    <div class="carousel-inner">
                        <div class="item active"> 
                            <div class="col-md-3 col-sm-6 hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item"> 
                            <div class="col-md-3 col-sm-6 hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 hero-feature hidden-sm hidden-xs">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3>Full Name</h3>
                                        <p>Description</p>
                                        <p><a href="contact.php" class="btn btn-primary">Contact</a> <a href="profile.php" class="btn btn-default">More Info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel4" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel4" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <a href="#">More details</a>
        </div>
    </div>
    <!-- End Content -->

<?php include_once "includes/footer.php"; ?>