<?php 

require 'controls.php';

if(!isset($_SESSION['email']) && !isset($_SESSION['loginTime']) ) : header("location: logout"); ?>

    <?php elseif ((time() - $_SESSION['loginTime']) > 1400) : header("location: logout"); ?>

     <?php else: ?>

<?php endif;
     
error_reporting(0);
?>