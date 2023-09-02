<?php
 include ('examcon.php');
 

 if(isset($_POST['res']))
 {  

$n=$_POST["category"];


  $a=$_POST["roll"];


  $e=$_POST["name"];

  $p=$_POST["email"];
  $id=$_GET['id'];

  $filename=$_POST["image"];
  $path=$_FILES["image"]["name"];
  $file=$_FILES["image"]["tmp_name"];
  $new=time();
  $filename=$new.".".pathinfo($path,PATHINFO_EXTENSION);
  $destination="image/".$filename;
  if(move_uploaded_file($file,$destination))
  {

  $msg="update  exam21 set category='$n' ,roll_no='$a',name='$e',email='$p' ,image='$filename'where id='$id'";

$result=mysqli_query($con,$msg);
if($result)
{
  echo"<script>alert('sucessfully updated')</script>";
  echo"<script>window.location='examlist.php'</script>";
  
}
else
{
  echo"error:".mysqli_error($con);
}

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
    $query="select * from exam21 where id='$id'";
    $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {

    ?> 
<form action="" method="post" enctype="multipart/form-data">  
  <div class="container">  
  <center>  <h1> Exam Entry </h1> </center>  
  <hr>  
  <label>  <b> Course: </b>  </label>   
  
  <select name="category">  
  <option value="<?php echo $row["category"];?>">category</option>    
  <option value="bca">BCA</option>  
<option value="mba">MBA</option>  
<option value="mca">MCA</option> 
</select>  
  <?php<br><br>  

 <label><b>  company name </b>  </label>   
<input type="text" name="name" placeholder= ''size="15" value="<?php echo $row["cname"];?>"required/>   


 <label><b>location : </b> </label>
<input type="text" name="location" value="<?php echo $row["location"];?>"required/>   

 <label for="email"><b>contact_no</b></label>  
 <input type="text"  name="contactno" value="<?php echo $row["contactno"];?>"required/> 

 <label><b>  Email </b>  </label>   
 <input type="text" name="email" placeholder= ''size="15" value="<?php echo $row["email"];?>"required/>   
 
 


 <b>Uplode image :</b> 
 
 <input type="file" name="image" value="<?php echo $row["image"];?>" size="10" />
 <br>  
   
    <button type="submit" class="registerbtn" name="res">UPDATE</button>    
</form> 
<?php } ?>
</body>  
</html> 

