<?php  

$m= $_REQUEST['id'];
$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM participant where id = $m";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <form  action="update.php" method="get">
 
 <table width='200' border='1'>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><th>Firstname</th><th>username</th></tr><tr><td><input type = 'text' name = 'firstname' value='$row[firstname]'></td><td><input type = 'text' name = 'username' value='$row[username]'></td></tr>";
	
  } 
 ?>
 <input type="hidden" name="pid" value="<?php echo $m;?>" />
 
 </table>
 <input type="submit" value="submit">
 </form>
 <?php
mysqli_close($conn);  
?>  