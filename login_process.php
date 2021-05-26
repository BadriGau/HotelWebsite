<?php
session_start();
   mysql_connect("localhost","root","");
   mysql_select_db("hotel");

  //if(isset($_post['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = mysql_query("select * from login where username = '$username' && password='$password'");
    
    $num = mysql_num_rows($data);
    if ($num == 1){
		$_SESSION['name'] = $_POST['username'];
        header('location:header.php');
        
    }
    else{
        echo "incorrect username or password.";
       header('location:index.php?invalid=Please Enter correct username and password');
    }

  
   
?>
