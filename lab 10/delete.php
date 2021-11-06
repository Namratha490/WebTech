<?php  

$m= $_REQUEST['id'];
$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "DELETE FROM participant where id = $m";  

 mysqli_query($conn, $sql);  
  echo "Data Sucessfully Deleted<br><a href='view_part.php'>BAck</a>";
mysqli_close($conn);  

?>  