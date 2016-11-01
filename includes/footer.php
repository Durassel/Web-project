<!-- Footer -->
    <footer>
      <div class="container-fluid background-lightgrey">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-justify">
              <h3>About us</h3>
              <p>We are students from EFREI and we wish to share our professional network to all students and companies. We want to make easier meetings between these actors. Our platform is easy to use, simply register to enjoy all the features. You will find your future job here. A job that looks like you, with a team and a common culture.</p>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">
              <h3>Students</h3>
              <ul>
                <li><a href="register.php">Sign up</a></li>
                <li><a href="employer.php">Employers</a></li>
                <li><a href="offers.php">Job offers</a></li>
              </ul>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center">
              <h3>Companies</h3>
              <ul>
                <li><a href="register.php">Sign up</a></li>
                <li><a href="student.php">Students</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid background-grey">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 footer-bottom">
              <span>Copyright © 2016 Frédéric ROSSO - Hugo MENAGER. All rights reserved.</span>
              <i class="fa fa-linkedin pull-right" aria-hidden="true"></i>
              <i class="fa fa-twitter pull-right" aria-hidden="true"></i>
              <i class="fa fa-facebook-official pull-right" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Login Modal Box -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Login</h3>
            <p class="help-block"><?php echo flash(); ?></p>
          </div>
          <div class="modal-body">
            <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
              <div class="form-group">
                <label class="sr-only" for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required="">
              </div>
              <div class="form-group">
                <label class="sr-only" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
              </div>
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
              </div>
           </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Login Modal Box -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <!-- Minified JavaScript -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <?php if(isset($js)) { echo $js; }?>
  </body>
</html>