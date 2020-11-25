
<!DOCTYPE html>
<html lang="en">
    	<!-- INCLUE HEADER -->
    <?php $GLOBALS['title'] = "Login | Mentor App"; include 'components/head.php'; ?>
  	<body>
		<div class="signin">
  			<div class="row zxc">
  				<div class="col-md-6 signin-box dws">
    				<h4>Welcome to</h4>
    				<h2>Mentor App</h2>
    				<p>Login to your account</p>
    				<div class="ruler"></div>
    				<p>Find us on</p>
        			<div class="mb-5 flex-left">
						<!-- Facebook -->
						<a href="https://facebook.com" class="fb-ic" style="color: white">
							<i class="fa fa-facebook fa-lg mr-4"> </i>
						</a>
						<!-- Twitter -->
						<a href="https://twitter.com" class="tw-ic" style="color: white">
							<i class="fa fa-twitter fa-lg mr-4"> </i>
						</a>
						<!--Linkedin -->
						<a href="https://linkedin.com" class="li-ic" style="color: white">
							<i class="fa fa-linkedin fa-lg mr-4"> </i>
						</a>
						<!--Instagram-->
						<a href="https://instagram.com" class="ins-ic" style="color: white">
							<i class="fa fa-instagram fa-lg mr-4"> </i>
						</a>
        			</div>
  				</div>
  				<div class="col-md-6 signin-box">
    				<h4 class="font-weight-bold green-text">Please Login</h4>

						<div class="alert hide messageAlert my-3">
							<span id="message"></span>
      					</div>

    				<div class="well" style="margin-top: 4%;">
          				<form method="post" class="shake">
            				<div class="row">
								<div class="form-group  col-sm-12">
									<input type="text" class="form-control" id="login-email" placeholder="E-mail">
									<div id="signUserErr" class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-12">
									<input type="password" placeholder="Password" class="form-control" id="login-password">
									<div id="signPassErr" class="help-block with-errors"></div>
								</div>
            				</div>
            				<input type="submit" id="loginSubmit" name="login" value="Login" class="btn btn-success px-4 pull-right mr-5 ">
            				<div class="clearfix"></div>
          				</form>
        			</div>
        			<p class="back-home">Don't have an account? <a href="signup" class="font-weight-bold green-text"> sign up</a></p>
  				</div>
  			</div>
		</div>


	<!-- INCLUDE SCRIPTS -->
    <?php include 'components/scripts.php'; ?>
</body>
</html>
