<?php
include('mainmenu.php');
include('dbcon.php');
$sql="select * from `cms`";
$run=mysqli_query($con,$sql);
if($run==false){
	echo "Error";
}
else if(mysqli_num_rows($run)<1){
    echo "no record found";
}	
else{
    while($data=mysqli_fetch_assoc($run)){
        ?>
		<br>
		<table width=100% border=1 cellspacing=3 cellpadding=4>
		<tr>
		<td width="20%" align="center"><?php echo $data['id'];?></td>
		
		<td width="35%" align="center"><img src="<?php echo $data['image'];?>" width="100" height="100"></td>
		
		<td width="20%" align="center"><?php echo $data['sc'];?></td>
		
		<td width="20%" align="center"><?php echo $data['cname'];?></td>
		
		</tr>
		
		</table>
		</br>
		
		<?php
	}
}
