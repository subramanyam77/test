<?php
error_reporting(0);
  
  include_once('inc_connection.php');

global $msg;
$msg=$_REQUEST['msg'];
  if(isset($_POST['Subtskupdt']) && $_POST['Subtskupdt'] =='Update' &&
        isset($_POST['txttle']) && $_POST['txttle'] !='' &&
        isset($_POST['txtdesc']) && $_POST['txtdesc'] !=''&&
        isset($_POST['txtprty']) && $_POST['txtprty'] !=''){
			
			
			  include_once('uqry_tsk_mst.php');
			
			
			}


    if(isset($_REQUEST['editid']) && $_REQUEST['editid'] !='' &&
        isset($_REQUEST['pg']) && $_REQUEST['pg'] =='1'){
   $tskid= $_REQUEST['editid'];
    $pg=$_REQUEST['pg'];
	 $cnt=$_REQUEST['count'];
 $sqltsk_mst="select tskm_id,tskm_title,tskm_desc,tskm_prty from tsk_mst where tskm_id ='$tskid'";
$rwstsk_mst= mysqli_query($conn,$sqltsk_mst);
 $serchretsk    =  mysqli_num_rows($rwstsk_mst);

					if($serchretsk > 0){
						$srowtsk_mst=mysqli_fetch_assoc($rwstsk_mst);
					
						}else{
							$msg="Record not found";
							
							}
		}
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <script >
function validate(){
   
var title=document.getElementById('txttle').value

var desc=document.getElementById('txtdesc').value
var perority=document.getElementById('txtprty').value
var status=document.getElementById('txtsts').value
if(title=="" || desc=="" || perority=="" || status=="" ){
	
if(title=="" ){

    document.getElementById('error_txttle').innerHTML="Enter Title";
    
    
}else{
	  document.getElementById('error_txttle').innerHTML="";
	}
if(desc=="" ){

    document.getElementById('error_txtdesc').innerHTML="Enter Description";

}else{
	document.getElementById('error_txtdesc').innerHTML="";
	}
if(perority=="" ){


    document.getElementById('error_txtprty').innerHTML="Enter Perority";


}else{
	    document.getElementById('error_txtprty').innerHTML="";
	}
if(status=="" ){


    document.getElementById('error_txtsts').innerHTML="Enter Status";

}else{
	
    document.getElementById('error_txtsts').innerHTML="";
	
	
	}
	return false;
}else{
return true;}
}
         </script>
         <h1>Edit Task</h1>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return validate()" >
    <input  type="hidden" class="form-control" name="hdntskid" id="hdntskid" value="<?php echo $srowtsk_mst['tskm_id'];?>" >
     <div class="form-group">
      <span><?php if($msg==1){ echo 'redcord updated';}elseif($msg==0){ echo 'redcord not updated';}else{}?></span>
</div>
    <div class="form-group">
       <label for="txttle"> Title</lable>
    <input class="form-control"  type="text" name="txttle" id="txttle" value="<?php echo $srowtsk_mst['tskm_title'];?>" >
    <span id="error_txttle"></span>
</div>
<div class="form-group">
    <label for="txtdesc"> Description</lable>
        <input class="form-control"  type="text" name="txtdesc" id="txtdesc" value="<?php echo  $srowtsk_mst['tskm_desc'];?>" >
        <span id="error_txtdesc"></span>
        </div>
<div class="form-group">
        <label for="txtprty"> peroity</lable>
        <input class="form-control" name="txtprty"  type="text" id="txtprty" value="<?php echo $srowtsk_mst['tskm_prty'];?>">
        <span id="error_txtprty"></span>
        </div>

<div class="form-group">
       <input type="submit" class="btn btn-primary mb-2"  name="Subtskupdt" id="Subtskupdt" value="Update">
       <button type="submit" class="btn btn-primary mb-2"  ><a href="task-list.php">Back </a> </button>


</div>
</form>
</body>

</html>