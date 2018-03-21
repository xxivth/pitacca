<?php
  $title = "Account Profile";
 ?>
<?php require_once 'includes/header.php'; ?>

<!-- content here -->
<section id="account-page">
  <div class="container-fluid">
    <div class="row">
      <!-- profile card -->
      <div class="col-md-3 cont">
        <div class="well">
          <div class="card text-center">
            <img class="img-responsive img-circle" id="account-img" src="img/account-img/dec.jpg">
            <h2>Dec Rachelle Wenceslao</h2>
            <p class="title">Administrator</p>
            <p>Tuitt Coding Bootcamp</p>
            <hr>
            <div class="vertical-menu text-left">
              <a href="#" class="active">Overview</a>
              <a href="#">Account Settings</a>
              <a href="#">Transaction History</a>
              <a href="#">Fund Transfer</a>
              <a href="#">Pay Bills</a>
              <a href="#">E-Load</a>
            </div>
          </div>
        </div>
      </div>
      <!-- account content -->
      <div class="col-md-9 cont">

      </div>
    </div>
  </div>

</section>

<?php require_once 'includes/footer.php'; ?>
