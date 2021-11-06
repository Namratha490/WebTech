<?php  

$r = $_REQUEST['firstname'];
$n = $_REQUEST['username'];
$m = $_REQUEST['pid'];


$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
 
  $sql = "update participant set firstname = '$r' ,username = '$n' where id = $m";  
echo "Data has updated Sucessfully<br><a href='view_part.php'>BAck</a>";
echo $sql;

 mysqli_query($conn, $sql);  
 
mysqli_close($conn);  
?>  