<?php
session_start();
 include ('../admincon.php');
 

 if(isset($_POST['res']))
 {  

  $c=$_POST["category"];

  $j=$_POST["jobtitle"];


  $l=$_POST["location"];

  $jt=$_POST["a"];
  
  $p=$_POST["position"];


  $s=$_POST["salary"];
  $v=$_POST["valid_upto"];
  $id=$_GET['cid'];

  $msg="insert into job_master(course,job_title,location,job_type,position,salary,valid_upto,cid) values('$c','$j','$l','$jt','$p','$s','$v','$id')";
  
if(mysqli_query($con,$msg))
{
  echo"<script>alert('sucessfully inserted')</script>";

  echo"<script>window.location='job.php?id=".$id."'</script>";
}
else
{
  echo"error:".mysqli_error($con);
}
mysqli_close($con);
 }

 

?>



<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="../assets/css/jobpost.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Job Post</div>
    <div class="content">
      <form action="#" method="post" onsubmit="myfun()">
        <div class="user-details">
        <div class="input-box">
          <label>  <b> category: </b>  </label>   
  
  <select name="category">  
  <option value="">select</option> 

         

          <?php
$query="select * from category_master order by cat_name";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
    echo"<option value=' ".$row['cat_name']."'> ".$row['cat_name']."</option>";
     
} 
?>
</select>


</div>
          <div class="input-box">
          </div>
          <div class="input-box">
            <span class="details">Job Title:</span>
            <input type="text" placeholder="Enter job title" name="jobtitle" required>
          </div>
          <div class="input-box">
            <span class="details">position:</span>
            <input type="text" placeholder="Enter position"  name="position"required>
          </div>
          <div class="input-box">
            <span class="details">Location:</span>
            <input type="text" placeholder="Enter location" name="location" required>
          </div>
         
          <div class="input-box">
            <span class="details">salary:</span>
            <input type="text" placeholder="Confirm salary"  name="salary"required>
          </div>
        </div>

        <label for="valid_up">Valid Up To:</label>
      <input type="date" id="valid_upto" name="valid_upto"><br>

        <div class="gender-details">
          <input type="radio" name="a" id="dot-1" value="fulltime">
          <input type="radio" name="a" id="dot-2" value="parttime">
          
          <span class="gender-title">Job Type:</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Full Time</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Part Time</span>
          </label>
         
          </div>
        </div>
        <div class="button">
          <input type="submit" name="res" value="post">
        </div>
      </form>
    </div>
  </div>

</body>
</html>