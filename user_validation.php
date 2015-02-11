<?php
session_start(); 

if(isset($_POST['submit'])){ 
    $dbHost = "localhost";        
    $dbUser = "ayoung";  
    $dbPass = "j042319"; 
    $dbDatabase = "ayoung";
	
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 

    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
    
    $username = mysql_real_escape_string($_POST['username']); 
    $password = mysql_real_escape_string($_POST['password'])); 
    $sql = mysql_query("SELECT * FROM user  
        WHERE username='$username' AND 
        password='$password' 
        LIMIT 1"); 
		
    if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        $_SESSION['username'] = $row['username']; 
        $_SESSION['first_name'] = $row['first_name']; 
        $_SESSION['last_name'] = $row['last_name']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: users_page.php"); 
        exit; 
    }
	else{ 
        header("Location: index.php"); 
        exit; 
    } 
}
else{
    header("Location: index.php");     
    exit; 
} 
?>