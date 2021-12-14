<<html>
<body>
<?php
include('mainmenu.php');
?>

<h2>Insert Course Details</h2>

<form action="insertcourse.php" method="post"
enctype="multipart/form-data">

<label>
Enter Subject Code
</label>

<input type="text" name="sc" placeholder="enter subject code" required>

<br><br>

<label>
Enter Course Name
</label>

<input type="text" name="name" placeholder="enter course name" required>
<br><br>

Upload Image 
<input type="file" name="simg" required>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>
 

<?php
if(isset($_POST['submit'])){
 include('dbcon.php');
 
 $sc=$_POST['sc'];
 $name=$_POST{'name'}; 
 $imagename=$_FILES['simg']['name'];
 $temp=$_FILES['simg']['tmp_name'];
 
 move_uploaded_file($temp,"$imagename");
 
 $sql="insert into `cms`(`id`,`sc`,`cname`,`image`)
 values ('','$sc','$name','$imagename')";
 $run=mysqli_query($con,$sql);
 if($run==true){
	
	?>
  <script>alert('Data Inserted Successfully');
  </script>
 <?php
}
else{
echo "Error";
}	
}
?> 

 
 
 
