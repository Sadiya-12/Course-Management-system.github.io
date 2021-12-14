<?php
if(isset($_POST['submit'])){
	 include('dbcon.php');
     $sc=$_POST['sc'];
     $cname=$_POST{'cname'}; 
     $id=$_POST['sid'];
     $imagename=$_FILES['simg']['name'];
	 $temp=$_FILES['simg']['tmp_name'];
	 move_uploaded_file($temp,"$imagename");
	 $sql="UPDATE `cms` SET `sc`='$sc', `cname`='$cname', `image`='$imagename' WHERE `id`='$id'";
	 $run=mysqli_query($con,$sql);
	 if($run==true){
		?>
		
    <script>
alert('Data Update Successfully');
window.open('mainmenu.php','_self');
	</script>
	<?php
	 }
	 else
	 {
        echo "Error" ;
		 
     }
?>
