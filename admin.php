
<?php
  $title = "Account Profile";
 ?>
<?php require_once 'includes/header.php';

// check if username is admin
if($_SESSION['firstName'] != 'admin'){
    // isn't admin, redirect them to a different page
    header("Location: account.php");
}
?>

<!-- content here -->
<section id="account-page">
  <div class="container-fluid">
    <div class="row">
      <!-- profile card -->
      <div class="col-sm-3 marginb-30">
        <?php require_once 'includes/account-card.php'; ?>
      </div>
      <!-- account content -->
      <div class="col-sm-9 content">
        <div class="row">
          <div class="sub-content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3>Users</h3>
              </div>
              <div class="panel-body text-center">
                <table class="table">
                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Balance</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </table>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

</section>

<?php require_once 'includes/footer.php'; ?>
