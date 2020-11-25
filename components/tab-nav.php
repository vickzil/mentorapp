<!-- Tab Profile  component -->
<div class="list-group" id="list-tab" role="tablist">
	<li class="list-group-item list-group-item-action">
		<div class="media user-profile dropdown">
			<div class="media-body text-left">
				<h6 class="pro-user-name ml-2 mt-2">
					<?php echo "<span id='user' class='text-dark font-weight-bold ' style='text-transform: capitalize;'> ". getUserDetails()['firstname'].' ' . getUserDetails()['lastname']. "</span>" ?> 
					<span class="pro-user-desc text-muted d-block mt-1 small">Administrator </span>
				</h6>
			</div>
			
		</div>
	</li>
</div><br>

<!-- Tab Nav component -->
<div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action <?php 
		if($page=='dashboard'){
			echo 'active';
		}?>" href="index" role="tab">
			<i class="fa fa-tachometer mr-3"></i> Dashboard
    </a>
    
    <a class="list-group-item list-group-item-action <?php 
		if($page=='mentor'){
			echo 'active';
		}?>" href="mentor" role="tab"> 
			<i class="fa fa-user-plus mr-3"></i>Mentor
    </a>

    <a class="list-group-item list-group-item-action <?php 
		if($page=='mentee'){
			echo 'active';
		}?>" href="mentee" role="tab">
			<i class="fa fa-user mr-3"></i> Mentee
    </a>

    <a class="list-group-item list-group-item-action <?php 
		if($page=='updatepayment'){
			echo 'active';
		}?>" id="list-payment-list" href="logout" role="tab">
			<i class="fa fa-paper-plane mr-3"></i> Logout
    </a>
    <span>
      <?php if($page=='profile'){ echo ''; }?>
    </span>
</div>
