<?php 
function display_mentors()
{
  require 'database/dbcon.php';
  $query="SELECT * FROM users WHERE role='mentor'";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result))
  {
    $mentorId= $row['id'];
    $mentorFirstName= $row['firstname'];
    $mentorLastName= $row['lastname'];
    echo '<option value="'.$mentorId.'">'.$mentorFirstName. ' '.$mentorLastName. '</option>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
	<!-- INCLUDE HEADER -->
	<?php $GLOBALS['title'] = "Signup | Mentor App"; include 'components/head.php'; ?>
	<body>
   		<div class="signin">
  			<div class="row zxc">
  				<div class="col-md-6 signin-box dws sig">
    				<h4>Welcome to</h4>
					<h2>Mentor App</h2>
					<p>Create an account</p>
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
    				<h4 class="font-weight-bold green-text">Sign Up</h4>
    				<div class="well" style="margin-top: 4%;">

						<div class="alert hide messageAlert my-3">
							<span id="message"></span>
      					</div>
          				<form role="form" method="POST" id="contactForm" data-toggle="validator" class="shake">
							<div class="row">
								<div class="form-group  col-sm-6">
									<input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" auto-complete="off">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group  col-sm-6">
									<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" auto-complete="off">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="row">
								<div class="form-group  col-sm-12">
									<input type="email" name="email" class="form-control" id="email" placeholder="E-mail" auto-complete="off">
									<div class="help-block with-errors"></div>
								</div>
            
								<div class="form-group  col-sm-12">
								<label class="form-control-label"><b>Role</b></label>
									<select id="role" name="role" class="form-control" required>
										<option disabled>Select Title</option>
										<option value="mentor">Mentor</option>
										<option value="mentee">Mentee</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group  col-sm-12 hide" id="chooseMentor">
								<label class="form-control-label"><b>Choose Mentor</b></label>
									<select id="assigned_to" name="assigned_to" class="form-control" required>
										<?php display_mentors(); ?>
									</select>
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-sm-12">
									<input type="password" placeholder="Password" name="password" class="form-control" id="password" auto-complete="off">
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-sm-12">
									<input type="password" placeholder="Confirm Password" name="cpassword" class="form-control" id="cpassword" auto-complete="off">
									<div class="help-block with-errors"></div>
								</div>
            				</div>
            				<input type="submit" id="signupSubmit" name="register" value="Sign Up" class="btn btn-success px-4 pull-right mr-5 ">
            				<div class="clearfix"></div>
          				</form>
        			</div>
        			<p class="back-home">Already have an account? <a href="signin" class="font-weight-bold green-text"> Login </a></p>
  				</div>
  			</div>
		</div>
     <!-- scripts -->
    <?php include 'components/scripts.php'; ?>
</body>
</html>