<html>
<body>
<?php
include('mainmenu.php');
?>
<h2>Update Course Details </h2>
<form action="updatecourse.php" method="post">
<label>
Enter Course Name
</label>

<input type="text" name="cname" required>

<label>
Enter Subject Code
</label>

<input type="text" name="sc" required>

<input type="submit" name="submit" value="Search">

</form>

<?php
if(isset($_POST['submit'])){
    include('dbcon.php');
    $cname=$_POST['cname']; 
    $sc=$_POST['sc'];
    $sql="select * from `cms` where `sc`='$sc' OR `cname` LIKE '%$cname%'" ;
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)<1){
	    echo "No record found";
    }
    else
    {
	    $count=0; 
	    while($data=mysqli_fetch_assoc($run)){
		    $count++;
		    ?>
		    <table border=1 cellspacing=3 cellpadding=4>
		
		    <tr>
		    <td align="center" width="20%">
<?php echo $data['sc'];?>		
		    </td>
			
		    <td align="center" width="25%">
<?php echo $data['cname'];?>		
		    </td>
			 
			<td align="center" width="30%">
<img src="<?php echo $data['image'];?>"		
		    </td>
			<td align="center" width="25%">
		<a href="updateform.php?sid=<?php echo $data['id'];?>"> Edit </a>	
		    </td>
</tr>   			
		    </table>

       
	        <?php
	    }		 
    }
}
?> 