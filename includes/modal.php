
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
  	                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="juandelacruz@yesdavao.com">
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
  	                                      <input type="checkbox" name="remember" id="remember"> Remember login
  	                                  </label>
  	                                  <p class="help-block">(if this is a private computer)</p>
  	                              </div>
  	                              <button type="submit" class="btn btn-success btn-block">Login</button>
  	                              <a href="/forgot/" class="text-center">Forgot password?</a>
  	                          </form>
  	                      </div>
  	                  </div>
  	                  <div class="col-xs-6">
                          <img class="img-responsive img-thumbnail" src="img/modal.png" id="modal-img">
  	                      <p><a href="#signup" data-toggle="tab" class="btn btn-info btn-block">Yes please, register now!</a></p>
  	                  </div>
  	              </div>

                  <!-- SIGN UP -->
                  <div class="row tab-pane fade" id="signup">
                      <div class="col-xs-6">
                          <img class="img-responsive img-thumbnail" src="img/nav-logo.png" id="modal-img">
                          <p><a href="#login" data-toggle="tab" class="btn btn-info btn-block">Already have an account?</a></p>
                      </div>

  	                  <div class="col-xs-6">
  	                      <div class="well">
  	                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
  	                              <div class="form-group">
  	                                  <label for="username" class="control-label">Username</label>
  	                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="juandelacruz@yesdavao.com">
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
  	                                      <input type="checkbox" name="remember" id="remember"> Remember login
  	                                  </label>
  	                                  <p class="help-block">(if this is a private computer)</p>
  	                              </div>
  	                              <button type="submit" class="btn btn-success btn-block">Login</button>
  	                              <a href="/forgot/" class="text-center">Forgot password?</a>
  	                          </form>
  	                      </div>
  	                  </div>

  	              </div>
                  <!-- END -->

                </div>
              </div>
	          </div>
	      </div>
		</div>
	</div>


                    <div class="span10 offset1">
			                <div id="modalTab">
			                    <div class="tab-content">
			                        <div class="tab-pane active" id="login">
			                            <form method="post" action='' name="login_form">
			                                <p><input type="text" class="span12" name="eid" id="email" placeholder="Email"></p>
			                                <p><input type="password" class="span12" name="passwd" placeholder="Password"></p>
			                                <p><button type="submit" class="btn btn-primary">Sign in</button>
			                                <a href="#forgotpassword" data-toggle="tab">Forgot Password?</a>
			                                </p>
			                            </form>
			                        </div>
			                        <div class="tab-pane fade" id="forgotpassword">
			                            <form method="post" action='' name="forgot_password">
			                                <p>Hey this stuff happens, send us your email and we'll reset it for you!</p>
			                                <input type="text" class="span12" name="eid" id="email" placeholder="Email">
			                                <p><button type="submit" class="btn btn-primary">Submit</button>
			                                <a href="#login" data-toggle="tab">Wait, I remember it now!</a>
			                                </p>
			                            </form>
			                        </div>
			                    </div>
			                </div>
			              </div>
