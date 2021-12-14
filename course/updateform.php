<?php 
include('mainmenu.php');
include('dbcon.php');
$sid=$_GET['sid'];
$sql="select * from `cms` where `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>

<h2>Update Course Details </h2>

<form action="update.php" method="post"
enctype="multipart/form-data">
<label>
  
Enter Subject Code
</label>  

<input type="text" name="sc" value="<?php echo $data['sc']; ?>" required>
<br><br>

<label>

Enter Course Name
</label>
<input type="text" name="cname" value="<?php echo $data['cname']; ?>" required>
<br><br>

Upload Image 

<input type="file" name="simg" required>

<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">

<input type="submit" name="submit" value="Update">

</form>
</body>
</html>

