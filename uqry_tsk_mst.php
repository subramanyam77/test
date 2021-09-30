<?php 
 include_once('inc_connection.php'); 

  if(isset($_POST['Subtskupdt']) && $_POST['Subtskupdt'] =='Update' &&
        isset($_POST['txttle']) && $_POST['txttle'] !='' &&
        isset($_POST['txtdesc']) && $_POST['txtdesc'] !=''&&
        isset($_POST['txtprty']) && $_POST['txtprty'] !=''){
			
			$tskid =$_POST['hdntskid'];
			$title=$_POST['txttle'];
			$desc=$_POST['txtdesc'];
			$prty=$_POST['txtprty'];
		 $sqltsk_mst="update  tsk_mst set  tskm_title='$title',tskm_desc='$desc',tskm_prty='$prty' where tskm_id=$tskid
			
			
			";
$rwstsk_mst = mysqli_query($conn,$sqltsk_mst);
			
			if($rwstsk_mst == true ){
				
				
				
				?>
           
			<script>
           location.href="edit_tsk.php?editid=<?php echo $tskid ?>&pg=1&count=0&msg=1";
            
            </script>
			
			<?php
				
				}else{
					?>
			<script>
           location.href="edit_tsk.php?editid=<?php echo $tskid ?>&pg=1&count=0&msg=0";
            
            </script>
			
			<?php
					
					}
			
			
			
			
			
			
			
			
			
			
			
			
			
			}



?>