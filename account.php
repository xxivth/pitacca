<?php
  $title = "Account Profile";
 ?>
<?php require_once 'includes/header.php'; ?>

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
          <div class="col-md-6 sub-content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3>Account Overview</h3>
              </div>
              <div class="panel-body">
                <table class="table borderless">
                  <tr>
                    <td class="text-bold">Name</td>
                    <td>Dec Rachelle Wenceslao</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td class="text-bold">Phone</td>
                    <td>09052081585</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td class="text-bold">Email</td>
                    <td>decwenceslao@gmail.com</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td class="text-bold">Address</td>
                    <td>Central Park, Bangkal, Davao City, Philippines</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td class="text-bold">Date of Birth</td>
                    <td>12-24-1988</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-6 sub-content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3>Quick Transaction History</h3>
              </div>
              <!-- Table -->
              <table class="table">
                <tr>
                  <th>Date</th>
                  <th>Transaction</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>01-25-18</td>
                  <td>Meralco</td>
                  <td>1578.00</td>
                  <td>Success</td>
                </tr>
                <tr>
                  <td>01-27-18</td>
                  <td>Globe</td>
                  <td>300.00</td>
                  <td>Success</td>
                </tr>
                <tr>
                  <td>01-29-18</td>
                  <td>09052085185</td>
                  <td>1500.00</td>
                  <td>Failed</td>
                </tr>
                <tr>
                  <td>02-12-18</td>
                  <td>Cebu Pacific</td>
                  <td>3455.00</td>
                  <td>Success</td>
                </tr>
                <tr>
                  <td>02-18-18</td>
                  <td>Air Asia</td>
                  <td>2784.00</td>
                  <td>Pending</td>
                </tr>
                <tr>
                  <td>02-28-18</td>
                  <td>09052081585</td>
                  <td>1500.00</td>
                  <td>Success</td>
                </tr>
              </table>
              <div class="panel-footer btn btn-block">VIEW MORE</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<?php require_once 'includes/footer.php'; ?>
