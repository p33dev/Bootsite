<?php 
	require_once("lib/config.php");

	/*
	* change diff userpie p33dev
	*/

if (!isset($loggedInUser)) {
    header('Location: login.php');
       exit();
   }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UserPie | <?php echo $websiteName; ?> </title>
<?php require_once("inc/head_inc.php"); ?>



</head>
<body>
<?php require_once("inc/header.php"); ?>
    
        
<h1>Bienvenue ce bootsite </h1>
        
        	<p>id :  <strong><?php echo $loggedInUser->display_username; ?></strong></p>


            <p>membre de :  <strong><?php  $group = $loggedInUser->groupID(); echo $group['group_name']; ?></strong></p>
          
            
            <p>date d'inscription <?php echo date("l \\t\h\e jS Y",$loggedInUser->signupTimeStamp()); ?> </p>
            

			
            

            
</body>
</html>


