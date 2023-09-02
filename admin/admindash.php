
<?php
session_start();
include 'header.php';
include_once '../admincon.php';
?>

     <html>
        <head></head>  
        <body>    
 
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">latest job</h1>
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
                       <th> <h3 class="t-op">Job_type</h3></th>
                       <th> <h3 class="t-op">Position</h3></th>
                       <th> <h3 class="t-op">Salary</h3></th>
                       <th> <h3 class="t-op">Valid_upto</h3></th>
</tr>
                    </div>
                    <?php
                    $c=1;
                   
                    $query="select * from job_view order by jid desc limit 10;";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
                    {
                    ?>
                    <div class="items">
                        <div class="item1">
                           <tr>
                           <td> <h3 class="t-op-nextlvl"><?php echo $c;?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><img width='50px' height='50px' src='../image/<?php echo $row["image"];?>' ></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["cname"];?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["course"];?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["job_title"];?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["location"];?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["job_type"];?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["position"];?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["salary"];?></h3></td>
                           <td><h3 class="t-op-nextlvl"><?php echo $row["valid_upto"];?></h3></td>
              
                    </tr>
                        </div>
 
                       
                        <?php $c++; 
                    } ?>
                       
 
                
 
                    </div>
                </div>
            </div>
        </div>
    </div>
 
   
</body>
</html>