<?php include 'set.php'; ?>
<div id="navigation" class="fixed-top">
    <h4>
        <a class="navbar-brand mt-1" href="index.php" style='color: rgba(0,0,21,.5);'> Mentor App</a>
    </h4>
    <div class="mt-2">
        <p id='user' style='text-transform: capitalize;color: rgba(0,0,21,.5);'>
            <span class="user-name">
                <?php getUserDetails()['firstname'];?> 
            </span>
            <i class="fa fa-bars burger ml-3"></i>
        </p>
    </div>
</div>

