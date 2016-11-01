<?php
  $title = "Contact";
  $css = "";
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
            <h2 class="header-page">Contact Page</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Page -->

    <!-- Content -->
    <div class="container">
      <div class="row">
        <form class="form-horizontal">
          <fieldset>
            <!-- Form Name -->
            <h4 class="page-header">Detail your mission for: <a href="profile.php">Student Name</a> or <a href="profile.php">Company Name</a> (This form is used to contact a company or a student)</h4>

            <!-- Company Name-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="company">Name</label>  
              <div class="col-md-5">
                <input id="company" name="company" type="text" placeholder="Name" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Email-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email</label>  
              <div class="col-md-5">
                <input id="email" name="email" type="email" placeholder="user@domain.com" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Mission Description -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="description">Mission Description</label>  
              <div class="col-md-5">
                <textarea id="description" name="description" placeholder=" Mission Description" class="form-control input-md" required="" rows= '15'></textarea>
              </div>
            </div>

            <!-- Button -->
            <div class="form-group text-center">
              <div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-5 col-lg-offset-4 col-lg-5">
                <button name="submit" class="btn btn-primary btn-block">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- End Content -->

<?php include_once "includes/footer.php"; ?>