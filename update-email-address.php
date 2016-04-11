<?php
	include("lib/config.php");
	
	//Prevent the user visiting the logged in page if he/she is not logged in
	if(!isUserLoggedIn()) { header("Location: login.php"); die(); }
?>
<?php
	/* 
		Below is a very simple example of how to process a login request.
		Some simple validation (ideally more is needed).
	*/

//Forms posted
if(!empty($_POST))
{
		$errors = array();
		$email = $_POST["email"];

		//Perform some validation
		//Feel free to edit / change as required
		
		if(trim($email) == "")
		{
			$errors[] = lang("ACCOUNT_SPECIFY_EMAIL");
		}
		else if(!isValidEmail($email))
		{
			$errors[] = lang("ACCOUNT_INVALID_EMAIL");
		}
		else if($email == $loggedInUser->email)
		{
				$errors[] = lang("NOTHING_TO_UPDATE");
		}
		else if(emailExists($email))
		{
			$errors[] = lang("ACCOUNT_EMAIL_TAKEN");	
		}
		
		//End data validation
		if(count($errors) == 0)
		{
			$loggedInUser->updateEmail($email);
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Contact Details | <?php echo $websiteName; ?> </title>
<?php require_once("inc/head_inc.php"); ?>

</head>
<body>
<?php require_once("inc/header.php"); ?>
    
    
            <?php
                if(!empty($_POST))
                {
                    if(count($errors) > 0)
                    {
                ?>
                <?php errorBlock($errors); ?>
                <?php
                     } else { ?> 
            
               <p><?php echo lang("ACCOUNT_DETAILS_UPDATED"); ?></p>
               
            <?php } }?>

    
                <form name="changePass" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            
                <p>
                    <label>Email:</label>
                    <input type="text" name="email" value="<?php echo $loggedInUser->email; ?>" />
                </p>

       
<input type="submit" class="btn btn-primary" name="new" id="newfeedform" value="Update" />
                
                </form>
      
            
              <p style="margin-top:30px; text-align:center;"><a href="/">Home</a></p>
</body>
</html>

