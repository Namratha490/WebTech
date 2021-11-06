<?php  

 
$conn = mysqli_connect("localhost:3306", "root", "","sems");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM participant";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <table width='200' border='1'>
 <tr><th>Firstname</th><th>Lasstname </th><th>email</th><th>reg_date</th><th>username</th><th>password</th><th colspan='2'>For modification</th></tr>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><td>$row[firstname]</td> <td>$row[lastname]</td><td>$row[email]</td><td>$row[reg_date]</td> <td>$row[username]</td><td>$row[password]</td> <td><a href='update1.php?id=$row[id]'>Edit</a></td><td><a href='delete.php?id=$row[id]'>Delete</a></td>  </tr>";
	
  } 
 ?>
 </table>
 
 <h4><a href="reg.html">Back</a></h4>
 <?php
mysqli_close($conn);  
?>  