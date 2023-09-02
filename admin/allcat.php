<?php
session_start();
include 'header.php';
include '../admincon.php';
?>


<htm>
    <head></head>
    <body>

   
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">All Category</h1>
                    <button class="view">View All</button>
                </div>
                <?php
               
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query="delete from category_master where cat_id='$id'";
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
                            <th>  <h3 class="t-op">Slno.</h3></th>
                            <th> <h3 class="t-op">Category</h3></th>
                            <th> <h3 class="t-op">Update</h3></th>
                            <th> <h3 class="t-op">Delete</h3></th>
                            </tr>
                    </div>
                    <?php
                    $c=1;
                    $query="select * from category_master order by  cat_name";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
                    {
                    ?>
                    <div class="items">
                        <div class="item1">
                        <tr>
                        <td>  <h3 class="t-op-nextlvl"><?php echo $c;?></h3></td>
                        <td>  <h3 class="t-op-nextlvl"><?php echo $row["cat_name"];?></h3></td>
                        <td>  <h3 class="t-op-nextlvl"><a href="catupdate.php?id=<?php echo $row['cat_id'];?>">
                         <button style="background-color:green";  type="button" class="view"  >Edit</button>
                            </a>
                           
                            </h3></td>
                            <td>  <h3 class="t-op-nextlvl"><a href="allcat.php?id=<?php echo $row['cat_id'];?>" >
                            <button style="background-color:red" ; type="button"  class="view" onclick="return conform('Do you want to delete?')">Delete</button>
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