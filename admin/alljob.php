<?php
session_start();
include '../admincon.php';
include_once 'header.php';
?>
<!DOCTYPE html>
<head></head>
 <body>

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">All jobs</h1>
                    <button class="view">View All</button>
                </div>

                <div class="report-body">
                    <div class="report-topic-heading">
                    <table cellspacing="30">
                            <tr>
                            <th> <h3 class="t-op">Slno.</h3></th>
                            <th> <h3 class="t-op">logo</h3></th>
                            <th> <h3 class="t-op">Company Name</h3></th>

                            <th> <h3 class="t-op">Category</h3></th>
                            <th> <h3 class="t-op">Job_title</h3></th>
                            <th> <h3 class="t-op">Location</h3></th>
                            <th>  <h3 class="t-op">Job_type</h3></th>
                            <th>  <h3 class="t-op">Position</h3></th>
                            <th> <h3 class="t-op">Salary</h3></th>
                            <th> <h3 class="t-op">Valid_upto</h3></th>
                            <th> <h3 class="t-op">Delete</h3></th>
                            </tr>
                    </div>

                    <?php
              
               if(isset($_GET['jid']))
               {
                   $id=$_GET['jid'];
                   $query="delete from job_master where jid='$id'";
                   $result=mysqli_query($con,$query);
                   if($result)
                   
                       echo"<script>alert('sucessfully deleted')</script>";
                   
                   else
                   echo"<script>alert('something worng')</script>";
               }
                ?>
             
                    <?php
                    $c=1;
                   
                    $query="select * from `job_master`;";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
                    {
                    ?>
                    <div class="items">
                        <div class="item1">
                        <tr>
                        <td>   <h3 class="t-op-nextlvl"><?php echo $c;?></h3></td>
                        <td>   <h3 class="t-op-nextlvl"><img width='50px' height='50px' src='../image/<?php echo $row["image"];?>' ></h3></td>
                        <td>  <h3 class="t-op-nextlvl"><?php echo $row["cname"];?></h3></td>
                        <td>    <h3 class="t-op-nextlvl"><?php echo $row["course"];?></h3></td>
                        <td>    <h3 class="t-op-nextlvl"><?php echo $row["job_title"];?></h3></td>
                        <td>     <h3 class="t-op-nextlvl"><?php echo $row["location"];?></h3></td>
                        <td>   <h3 class="t-op-nextlvl"><?php echo $row["job_type"];?></h3></td>
                        <td>   <h3 class="t-op-nextlvl"><?php echo $row["position"];?></h3></td>
                        <td>   <h3 class="t-op-nextlvl"><?php echo $row["salary"];?></h3></td>
                        <td>   <h3 class="t-op-nextlvl"><?php echo $row["valid_upto"];?></h3></td>
              
                        <td>   <h3 class="t-op-nextlvl"><a href="alljob.php?id=<?php echo $row['jid'];?>" >
                            <button style="background-color:red" ; type="button"  class="view" onclick="return confirm('Do you want to delete?')">Delete</button>
                        </a></h3>
                        </tr>
                        </div>
 
                       
                        <?php $c++; 
                    } ?>
                       
 
                
 
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <script src="./dash.js"></script>
</body>
</html>