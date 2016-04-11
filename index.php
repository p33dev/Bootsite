<?php

require_once("lib/config.php");

if(!isUserLoggedIn())
{ 
 include('landing-page.php'); 
	
 } else { 

header("Location: home.php"); 	 

} ?>
