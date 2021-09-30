<?php 
session_start();
error_reporting(0);
 
include_once('inc_connection.php');

		if(isset($_REQUEST["taskid"]) && ($_REQUEST["taskid"]!='' )&& ($_REQUEST["action"]=='d') ){
	$taskid=$_REQUEST["taskid"];
		    $sqltask_mst="delete from tsk_mst where tskm_id='$taskid' ";
    $srwtask_mst=mysqli_query($conn,$sqltask_mst);
	if($srwtask_mst == true){
		?>
		<script>
		location.href="task-list.php";
        alert('Task Deleted successfully');
		
        </script>
		<?php

		}else{
			
				?>
		<script>
		location.href="task-list.php";
        alert('Task Not Deleted ');
        </script>
		<?php }
		
		}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<h2>View All Task</h2>
<h3><a href="task.php">ADD</a></h3>
<?php
$sqltsk_mst="select tskm_id,tskm_title,tskm_desc,tskm_prty from tsk_mst order by tskm_id desc";
$rwstsk_mst=mysqli_query($conn,$sqltsk_mst);
   $cnttsk_mst  = mysqli_num_rows($rwstsk_mst);
			  	$nfiles = "";
				
 ?>
<table class="table">
<tr scope="col" >
<td align="center" colspan="6"><?php if($msg !=''){echo $msg; }?></td></tr>



    <tr>
      <td scope="col">Sl.No</td>
      <td scope="col">Title</td>
      <td scope="col">Description</td>
      <td scope="col">Rank</td>
   	
      <td scope="col" >Edit</td>
      <td scope="col">Delete</td>
    </tr>
 
  <tbody>
    <?php 
  if($cnttsk_mst> 0 ){
  	while($srowtsk_mst=mysqli_fetch_assoc($rwstsk_mst)) {
		$cnt+=1;
   ?>
    <tr>
      <td ><?php echo $cnt;?></td>
     
      <td><?php echo $srowtsk_mst ['tskm_title'];?></td>
      <td><?php echo $srowtsk_mst ['tskm_desc'];?></td>
      <td><?php echo $srowtsk_mst ['tskm_prty'];?></td>
   
      <td><a href="edit_tsk.php?editid=<?php echo $srowtsk_mst ['tskm_id'];?>&pg=1&count=0">Edit</a></td>
      <td><a href="task-list.php?taskid=<?php echo $srowtsk_mst ['tskm_id'];?>&action=d" >Delete</a></td>
    </tr>
  <?php } }else{?>
	  <tr> <td colspan="5" align="center"><?php 
	  echo "record not found";?>
	</td> </tr>  <?php }?>
  </tbody>
</table>
</body>

    </html>