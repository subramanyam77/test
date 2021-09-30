<?php 
 
   global $conn;   
   $dbhstnm	= "localhost";
   $dbrootnm	= "root";
   $dbpwd 	= "";
  
	$dbnm	= "task";       
   $conn    = mysqli_connect($dbhstnm,$dbrootnm,$dbpwd,$dbnm) ;
    if(!$conn){
   		echo "Connection Could Not be Established";
   }   
  
?>

