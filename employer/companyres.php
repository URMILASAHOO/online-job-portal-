<?php
 include ('../admincon.php');
 

 if(isset($_POST['res']))
 {  

$n=$_POST["cname"];


  $l=$_POST["location"];


  $c=$_POST["contact"];

  $e=$_POST["email"];
  
  $u=$_POST["username"];


  $p=$_POST["password"];




  $path=$_FILES["image"]["name"];
  $file=$_FILES["image"]["tmp_name"];
  $new=time();
  $filename=$new.".".pathinfo($path,PATHINFO_EXTENSION);
  $destination="../image/".$filename;
  if (move_uploaded_file($file,$destination))
  {
  $msg="insert into employer_master(cname,location,contact,email,username,password,image) values('$n','$l','$c','$e','$u','$p','$filename')";
  
if(mysqli_query($con,$msg))
{
  echo"<script>alert('sucessfully inserted')</script>";
  echo"<script>window.location='companylog.php'</script>";
}
else
{
  echo"error:".mysqli_error($con);
}
mysqli_close($con);
 }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/jobpost.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
  <div class="container">
    <div class="title"> Employer Registration</div>
    <div class="content">
      <form action="#" id="resister"action="" method="post" onsubmit="myfun()" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
          <span class="details">Company name:</span>
            <input type="text" placeholder="Enter your company name" name="cname" required>
          </div>
          <div class="input-box">
            <span class="details">contact no:</span>
            <input type="text" placeholder="Enter your contactno" name="contact" required>
          </div>
          <div class="input-box">
            <span class="details">Email:</span>
            <input type="text" placeholder="Enter your email"  name="email"required>
          </div>
          <div class="input-box">
            <span class="details">Location:</span>
            <input type="text" placeholder="location" name="location" required>
          </div>
          <div class="input-box">
            <span class="details">Username:</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
        

          <div class="input-box">
            <span class="details">Password:</span>
            <input type="password" placeholder="Confirm your password"  name="password"required>
          </div>
          
         
          <span class="details">Company Logo:</span>
            <input type="file" placeholder="Image file" name="image" value="" required>
</div>

        <div class="button">
          <input type="submit" name="res" value="resistation">
        </div>
      </form>
    </div>
  </div>

</body>
</html>