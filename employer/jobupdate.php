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
  $id=$_GET['id'];

 

  $msg="update  job_master set course='$c',job_title='$j',location='$l',job_type='$jt',position='$p',salary='$s',valid_upto='$v'where jid='$id'";

$result=mysqli_query($con,$msg);
if($result)
{
  echo"<script>alert('sucessfully updated')</script>";
  echo"<script>window.location='job.php'</script>";
  
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
    $query="select * from job_master where jid='$id'";
    $result=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result))
            {
              ?> 
             

   

<form action="#" method="post" onsubmit="myfun()">
        <div class="user-details">
       
          <div class="input-box">
          </div>
          <div class="input-box">
            <span class="details">Job Title:</span>

           

            <input type="text"placeholder="Enter your username" name="jobtitle" value="<?php echo $row["job_title"];?>" required>
          </div>
          <div class="input-box">
            <span class="details">position:</span>
            <input type="text" placeholder="Enter your position"  name="position" value="<?php echo $row["position"];?>"required>
          </div>
          <div class="input-box">
            <span class="details">Location:</span>
            <input type="text" placeholder="Enter your location" name="location"value="<?php echo $row["location"];?>" required>
          </div>
         
          <div class="input-box">
            <span class="details">salary:</span>
            <input type="text" placeholder="salary"  name="salary" value="<?php echo $row["salary"];?>"required>
          </div>
        </div>

        <label for="valid_up">Valid Up To:</label>
      <input type="date" id="valid_upto" name="valid_upto" value="<?php echo $row["valid_upto"];?>"><br>
      <span>Job Type:</span>
        <div class="gender-details">
          <input type="radio" name="a" id="dot-1" value="fulltime">
          <span class="a">Full Time</span>
          <input type="radio" name="a" id="dot-2" value="parttime">
          
          
        

           
         
            <span class="a">Part Time</span>
          
         
          </div>
        </div>
        <div class="button">
          <input type="submit" class="registerbtn" name="res" value="update">
        </div>
      </form>


 
<?php } ?>
</body>  
</html> 

