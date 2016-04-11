<?php 

	
?>
<?php if(isUserLoggedIn()) { ?>
            	<li><a href="/">Account Home</a></li>
       			<li><a href="change-password.php">Change password</a></li>
                <li><a href="update-email-address.php">Update email address</a></li>
 				<li><a href="logout.php">Logout</a></li>
<?php } else { ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
<?php } ?>
        </ul>
