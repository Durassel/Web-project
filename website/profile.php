<?php
  $title = "Profile";
  $css = "<!-- Profile CSS --><link rel=\"stylesheet\" href=\"css/profile.css\">";
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
            <h2 class="header-page">Profile</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Page -->

    <!-- Content -->
    <div class="container">
      <div class="row page-header">
          <h3>Profile : Full Name</h3>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="thumbnail pull-left col-xs-12 col-sm-4 col-md-12 col-lg-12">
            <img src="http://placehold.it/800x500" alt="">
          </div>
          <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12">
            <h3>Full Name</h3>
            <p><b>Email</b> : email@gmail.com</p>
            <p><b><abbr title="Phone">P:</abbr></b> (123) 456-7890</p>
            <p><b>Gender</b> : Male</p>
            <address>
                <p><b>Address</b> : 777 avenue Robert Bourassa, Montreal, QC H3C 3Z7, Canada</p>
            </address>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
            <b>Languages spokens</b> :
            <ul>
              <li>French</li>
              <li>English</li>
              <li>Spanish</li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
            <b>Skills</b> : 
            <ul>
              <li>C</li>
              <li>C++</li>
              <li>JAVA</li>
              <li>HTML / CSS</li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
            <b>Hobbies</b> : 
            <ul>
              <li>Music</li>
              <li>Sport</li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-12 col-lg-offset-0 col-lg-12">
            <a href="contact.php" class="btn btn-primary btn-block">Contact</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
          <h4><b>Description</b> : </h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <h4><b>Experience</b> : </h4>
          <p>
            <ul class="timeline">
              <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-briefcase"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">2012 : Intership : Microsoft</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>January 22th 2012 - March 8th 2014</small></p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge"><i class="glyphicon glyphicon-briefcase"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">2014 : Job : Apple</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>April 10th 2014 - September 15th 2015</small></p>
                  </div>
                   <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-briefcase"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Currently : Teacher : EFREI</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>October 19th 2015 - currently</small></p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                  </div>
                </div>
              </li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <!-- End Content -->

<?php include_once "includes/footer.php"; ?>