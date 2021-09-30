<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body> 
    <?php   
    include_once('inc_connection.php');

    if(isset($_POST['Subtsk']) && $_POST['Subtsk'] !='' &&
        isset($_POST['txttle']) && $_POST['txttle'] !=''){
   $title= $_POST['txttle'];
    $desc=$_POST['txtdesc'];
   $prty= $_POST['txtprty'];
    $sts=$_POST['txtsts'];
    $dt=date('Y-m-d');
  
     $sqltask_mst="insert into tsk_mst(tskm_title,tskm_desc,tskm_prty)
    values('$title','$desc','$prty')";
    $srwtask_mst=mysqli_query($conn,$sqltask_mst);
	
    if($srwtask_mst == true){?>
<script>
alert('Task Added Successfully');
</script>;
   <?php  }else{?>
      <script>
alert('Task Not Added ');
</script>;
   <?php }
}
    
    ?>
    <script >
function validate(){
   
var title=document.getElementById('txttle').value

var desc=document.getElementById('txtdesc').value
var perority=document.getElementById('txtprty').value

if(title=="" || desc=="" || perority=="" || isNaN(perority)){
	
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


}else if (isNaN(perority)){  
  document.getElementById("error_txtprty").innerHTML="Enter Numeric value only";  
  
}else{
	    document.getElementById('error_txtprty').innerHTML="";
	}

	return false;
}else{
return true;}
}
         </script>
         <h1>Add Task</h2>
         <h4> <a href="task-list.php">Task List</a></h4>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onSubmit="return validate()" >
    <div class="form-group">
       <label for="txttle"> Title</lable>
    <input class="form-control" name="txttle"  type="text" id="txttle" >
    <span id="error_txttle"></span>
</div>
<div class="form-group">
    <label for="txtdesc"> Description</lable>
        <input class="form-control" name="txtdesc" type="text"  id="txtdesc" >
        <span id="error_txtdesc"></span>
        </div>
<div class="form-group">
        <label for="txtprty"> peroity</lable>
        <input class="form-control" name="txtprty"  type="text" id="txtprty" >
        <span id="error_txtprty"></span>
        </div>

<div class="form-group">
       <input type="submit" class="btn btn-primary mb-2"  name="Subtsk" id="Subtsk" value="Add">
</div>
</form>
</body>
    </html>