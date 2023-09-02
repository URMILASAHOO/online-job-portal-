<?php
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html >
 
<head></head>
    
            <body>

   
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">All Employee</h1>
                    <button class="view">View All</button>
                </div>
                <?php
               include '../admincon.php';
               if(isset($_GET['id']))
               {
                   $id=$_GET['id'];
                   $query="delete from employe_master where eid='$id'";
                   $result=mysqli_query($con,$query);
                   if($result)
                   
                       echo"<script>alert('sucessfully deleted')</script>";
                   
                   else
                   echo"<script>alert('something worng')</script>";
               }
                ?>
             
 
                <div class="report-body">
                    <div class="report-topic-heading">
                    <table cellspacing="30">
                            <tr>
                            <th> <h3 class="t-op">Slno.</h3></th>
                            <th><h3 class="t-op">Name</h3></th>
                            <th> <h3 class="t-op">Location</h3></th>
                            <th> <h3 class="t-op">Contact</h3></th>
                            <th> <h3 class="t-op">email</h3></th>
                            <th> <h3 class="t-op">cv</h3></th>
            
                            <th> <h3 class="t-op">Delete</h3></th>
            </tr>
                    </div>
                    <?php
                    $c=1;
                    $query="select * from employe_master order by  name";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
                    {
                    ?>
                    <div class="items">
                        <div class="item1">
                        <tr>
                        <td>  <h3 class="t-op-nextlvl"><?php echo $c;?></h3></td>
                        
                        <td> <h3 class="t-op-nextlvl"><?php echo $row["name"];?></h3></td>
                        <td>  <h3 class="t-op-nextlvl"><?php echo $row["location"];?></h3></td>
                        <td>  <h3 class="t-op-nextlvl"><?php echo $row["contact"];?></h3></td>
                        <td>  <h3 class="t-op-nextlvl"><?php echo $row["email"];?></h3></td>
                        <td>  <h3 class="t-op-nextlvl"><a href='../image/<?php echo $row["pdf"];?>' >open cv   </a></h3></td>
                        

                        <td> <h3 class="t-op-nextlvl"><a href="allemployer.php?id=<?php echo $row['eid'];?>" >
                            <button style="background-color:red";   type="button"  class="view" onclick="return conform('Do you want to delete?')">Delete</button>
                        </a></h3></td>
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