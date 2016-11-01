<?php
  $title = "Mailbox";
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
            <h2 class="header-page">Mailbox</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Page -->

    <!-- Content -->
    <div class="container">
      <div class="row page-header">
          <h3>Check your messages</h3>
      </div>
      <div class="row">
        <div class="table-responsive">
          <table class="table table-striped table-hover table-bordered">
            <tr>
              <th>Delete</th>
              <th>Title / Creation date</th>
              <th>Last answer</th>
            </tr>
            <tr>
              <td><input type="checkbox" name="choice"></td>
              <td>
                <b>Example 1</b><br>
                <small>August 11th 2016</small>
              </td>
              <td>
                <a href="profile.php">Full Name</a><br>
                <small>August 15th 2016</small>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="choice"></td>
              <td>
                <b>Example 2</b><br>
                <small>July 22th 2016</small>
              </td>
              <td>
                <a href="profile.php">Full Name</a><br>
                <small>July 29th 2016</small>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="choice"></td>
              <td>
                <b>Example 3</b><br>
                <small>December 20th 2015</small>
              </td>
              <td>
                <a href="profile.php">Full Name</a><br>
                <small>January 18th 2016</small>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="choice"></td>
              <td>
                <b>Example 4</b><br>
                <small>September 5th 2016</small>
              </td>
              <td>
                <a href="profile.php">Full Name</a><br>
                <small>September 5th 2016</small>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- End Content -->

<?php include_once "includes/footer.php"; ?>