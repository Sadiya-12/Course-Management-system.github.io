<?php
include('mainmenu.php');	
?>
<html>
<body>
<h2>Delete Course Details</h2>
<h3>Find Course Record To Delete</h3>

<form action="deletecourse.php" method="post">
<label>
Enter Subject Code
</label>
<input type="text" name="sc" required>

<label>
Enter Course name
</label>

<input type="text" name="name" required>

<input type="submit" name="submit" value="search">
</form>

<?php
if(isset($_POST['submit'])){
 include('dbcon.php');
 
 $sc=$_POST['sc'];
 $name=$_POST{'name'}; 
 $sql="select* from `cms` where`sc`='$sc' OR 
 `cname` LIKE '%name%'";
 $run=mysqli_query($con,$sql);
 if(mysqli_num_rows($run)<1){
	 echo "No Record Found";
    }
    else {
		$count=0;
		
		while($data=mysqli_fetch_assoc($run)){
			$count++;
			?>
			<br>
		<table width=100% border=1 cellspacing=3 cellpadding=4>
		<tr>

        <td width="35%" align="center"><img src="<?php echo $data['image'];?>" width="100" height="100"></td>
		
		<td width="20%" align="center"><?php echo $data['sc'];?></td>
		
		<td width="20%" align="center"><?php echo $data['cname'];?></td>
		
	    <td width="20%" align="center">
		<a href="delete.php?sid=<?php echo $data['id'];?>">
		Delete
		</a>
		</td>
		</tr>
		
		</table>
		</br>
		
			
			<?php
		}	
	}	
}		
?>

</body>
</html>
	 