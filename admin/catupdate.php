<?php
 include ('../admincon.php');
 

 if(isset($_POST['res']))
 {  

$n=$_POST["name"];

$id=$_GET['id'];
 

  $msg="update  category_master set cat_name='$n' where cat_id='$id'";

$result=mysqli_query($con,$msg);
if($result)
{
  echo"<script>alert('sucessfully updated')</script>";
  echo"<script>window.location='allcat.php'</script>";
  
}
else
{
  echo"error:".mysqli_error($con);
}

 }


?>

 <!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
.container {  
    padding: 50px;  
  background-color: white;  
}  
  
input[type=text], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: ridge;  
  background: white;  
}  
input[type=text]:focus, :focus {  
  background-color:lightblue; 
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid black;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body> 
<?php

    $id=$_GET['id'];
    $query="select * from category_master where cat_id='$id'";
    $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {

    ?> 
<form action="" method="post" enctype="multipart/form-data">  
  <div class="container">  
  

 <label><b> category</b>  </label>   
<input type="text" name="name" placeholder= ''size="15" value="<?php echo $row["cat_name"];?>"required/>   


 
   
    <button type="submit" class="registerbtn" name="res">UPDATE</button>    
</form> 
<?php } ?>
</body>  
</html> 

