
<!DOCTYPE html>
<html lang="en">
	<!-- INCLUDE HEAD SECTION -->
    <?php $GLOBALS['title'] = "Dashboard | Mentor App"; include 'components/head.php'; ?>
	<!-- BODY -->
  	<body>
   	 	<!-- INCLUDE NAVBAR -->
    	<?php $page = 'dashboard'; include 'components/navbar.php'; ?>
    	  <!-- TOP NABVAR -->
    		<div class="container-fluid" style="padding-top:80px;">
      			<div class="row">
					<aside>
						<?php include 'components/tab-nav.php'; ?>
					</aside>
        			<!-- column 9 -->
					<!-- Dashboard -->
					<div class="content-page" style="padding-top:30px;">
						<div class="tab-content" id="nav-tabContent">
							<!-- MENTOR -->
							<div class="container-fluid">
								<div class="card">
									<div class="card-body">
										<h2 class="text-secondary" id="heading"><i class="fa fa-user-plus"></i> Mentor</h2><br>
										<div class="table-responsive mb-5">
											<table class="table table-bordered">
												<thead class="text-center">
													<tr class="text-light" style="background: #17174a;">
														<th>Mentors Names</th>
														<th>E-mail</th>
														<th>Role</th>
														<th>Dated created</th>
													</tr>
												</thead>
												<tbody id="addDoc" class="text-center">
													<?php displayAllmentors(); ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<<!-- MENTEE -->
							<div class="container-fluid mt-5">
								<div class="card">
									<div class="card-body">
										<h2 class="text-secondary" id="heading"><i class="fa fa-user-plus"></i> Mentee</h2><br>
										<div class="table-responsive mb-5">
											<table class="table table-bordered">
												<thead class="text-center">
													<tr class="text-light" style="background: #17174a;">
														<th>Mentors Names</th>
														<th>E-mail</th>
														<th>Role</th>
														<th>Asigned To</th>
														<th>Dated created</th>
													</tr>
												</thead>
												<tbody id="addDoc" class="text-center">
													<?php displayAllMentee(); ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<br>
						</div>
					</div>
      			</div>
    		</div>
    
    	<!-- SCRIPT -->
    	<?php include 'components/scripts.php'; ?>
  	</body>
</html>