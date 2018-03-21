
 	<!-- <button type="button" class="btn btn-info btn-lg" (data-toggle="modal" data-target="#login-overlay")>Open Modal</button> -->

	<div id="login-overlay" class="modal fade" role="dialog">
		<div class="modal-dialog">
	      <div class="modal-content">
	          <div class="modal-header" id="modal-header">
	              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <img id="modal-logo" src="img/nav-logo2.png" alt="">
	          </div>
	          <div class="modal-body" id="modal-body">
              <div class="row-fluid">
                <div class="tab-content">

                  <!-- LOGIN -->
                  <div class="row tab-pane active" id="login">
  	                  <div class="col-xs-6">
  	                      <div class="well">
  	                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
  	                              <div class="form-group">
  	                                  <label for="username" class="control-label">Username</label>
  	                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="">
  	                                  <span class="help-block"></span>
  	                              </div>
  	                              <div class="form-group">
  	                                  <label for="password" class="control-label">Password</label>
  	                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
  	                                  <span class="help-block"></span>
  	                              </div>
  	                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
  	                              <div class="checkbox">
  	                                  <label>
  	                                      <input type="checkbox" name="remember" id="remember"> <small>Remember login</small>
  	                                  </label>
  	                                  <span class="help-block"></span>
  	                              </div>
  	                              <button type="submit" class="btn btn-success btn-block">Login</button>
  	                              <p class="text-center"><a href="#forgotpassword" data-toggle="tab"><small>Forgot password?</small></a></p>
  	                          </form>
  	                      </div>
  	                  </div>
  	                  <div class="col-xs-6">
                          <img class="img-responsive img-thumbnail" src="img/modal.png" id="modal-img">
  	                      <p><a href="#signup" data-toggle="tab" class="btn btn-info btn-grey btn-block">Create new account</a></p>
  	                  </div>
  	              </div>

                  <!-- SIGN UP -->
                  <div class="row tab-pane fade" id="signup">
  	                  <div class="col-xs-12">
  	                      <div class="well">
  	                          <form id="loginForm" method="POST" action="includes/signup.php" novalidate="novalidate">
                                <div class="col-xs-6">
  	                              <div class="form-group">
  	                                  <label for="firstname" class="control-label">First Name</label>
  	                                  <input type="text" class="form-control" id="first-name" name="firstname" value="" required="" title="Please enter you first name" placeholder="">
  	                                  <span class="help-block"></span>
  	                              </div>
                                  <div class="form-group">
  	                                  <label for="lastname" class="control-label">Last Name</label>
  	                                  <input type="text" class="form-control" id="last-name" name="lastname" value="" required="" title="Please enter you last name" placeholder="">
  	                                  <span class="help-block"></span>
  	                              </div>
                                  <div class="form-group">
  	                                  <label for="phone" class="control-label">Phone Number</label>
  	                                  <input type="number" class="form-control" id="phone-num" name="phone" value="" required="" title="Please enter you phone number" placeholder="">
  	                                  <span class="help-block"></span>
  	                              </div>
                                </div>

                                <div class="col-xs-6">
  	                              <div class="form-group">
  	                                  <label for="email" class="control-label">Email</label>
  	                                  <input type="email" class="form-control" id="e-mail" name="email" value="" required="" title="Please enter your password">
  	                                  <span class="help-block"></span>
  	                              </div>
  	                              <div class="form-group">
  	                                  <label for="password" class="control-label">Password</label>
  	                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
  	                                  <span class="help-block"></span>
  	                              </div>
  	                              <div class="form-group">
  	                                  <label for="confirm-password" class="control-label">Confirm Password</label>
  	                                  <input type="password" class="form-control" id="confirm-password" name="confirm-password" value="" required="" title="Please confirm your password">
  	                                  <span class="help-block"></span>
  	                              </div>
                                </div>

                                <div class="submit-create">
  	                              <button type="submit" name="submit" class="btn btn-success btn-block">Create account</button>
                                  <p class="text-center"><small>By signing up, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</small></p>
                                  <span class="help-block"></span>
                                </div>
  	                          </form>
                              <p class="text-center"><a href="#login" data-toggle="tab" class="btn btn-info btn-grey">Already have an account?</a></p>
  	                      </div>
  	                  </div>
  	              </div>

                  <!-- FORGOT PASSWORD -->
                  <div class="row tab-pane fade" id="forgotpassword">
  	                  <div class="col-xs-6">
  	                      <div class="well">
  	                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                                  <div class="form-group">
                                      <label for="e-mail" class="control-label">Enter Email Address</label>
                                      <input type="email" class="form-control" id="e-mail" name="e-mail" value="" required="" title="Please enter your password">
                                      <span class="help-block"></span>
                                  </div>
  	                              <button type="submit" class="btn btn-success btn-block">Submit</button>
  	                          </form>
  	                      </div>
  	                  </div>
                      <div class="col-xs-6">
                          <img class="img-responsive img-thumbnail" src="img/modal2.png" id="modal-img">
  	                      <p><a href="#login" data-toggle="tab" class="btn btn-info btn-grey btn-block">Login to account</a></p>
  	                  </div>
  	              </div>

                  <!-- END -->
                </div>
              </div>
	          </div>
	      </div>
		</div>
	</div>
