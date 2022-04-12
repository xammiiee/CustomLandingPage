<?php

session_start();
// $mysql = mysqli_connect("remotemysql.com","HV9Jv6X0OX","1mlYPFrQoR","HV9Jv6X0OX");
	
// 	if (mysqli_connect_errno())
// 	{
// 	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
// 	  die();
//   	}
// 	  else{
// 		//   echo "Successful to connect to MySQL";
// 	}

	$mysql = mysqli_connect("localhost","root","","research_portal");
	
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  die();
  	}
	  else{
		//   echo "Success";
	  } 
 
?>