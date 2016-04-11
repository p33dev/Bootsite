<?php

require_once("lib/config.php");

if(!isUserLoggedIn())
{ 
 include('public-page.php'); 
	
 } else { 
 include('home.php')

} ?>
