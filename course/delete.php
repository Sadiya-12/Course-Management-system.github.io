<?php
 include('dbcon.php');
 $sid=$_REQUEST['sid'];
 $qry="delete from `cms` where `id` ='$sid'";
 $run=mysqli_query($con,$qry);
 if($run==true){
	?>
	<script>alert('Data Deleted Successfully');
	window.open('mainmenu.php','_self')
    </script>
	
<?php
 }
 else{
echo "Error";
}	
>?