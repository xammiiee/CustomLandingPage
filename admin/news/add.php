
<?php
//insert.php

if(isset($_POST["name"]))
{
    $email = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $author = $_POST['author'];
	
 $connect = new PDO("mysql:host=localhost;dbname=research_portal", "root", "");
//  $connect = new PDO("mysql:host=remotemysql.com;dbname=HV9Jv6X0OX", "HV9Jv6X0OX", "1mlYPFrQoR");
 $query = "INSERT INTO tblnews(name,email,mobile,author,tags,cites,views) VALUES(:name,'$mobile','$email','$author', :skill,'','')";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':name'  => $_POST["name"],
   ':skill' => $_POST["skill"]
  )
 );

 $result = $statement->fetchAll();
 $output = '';
 if(isset($result))
 {
	$_SESSION['status']= "Data Inserted Successfully";
	header('Location: index.php');
  
 }
 echo $output;
}

?>