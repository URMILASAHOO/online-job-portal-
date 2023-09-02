<?php
session_start();
if(is_null($_SESSION['id']))
{
    header("Location: elog.php");
    
}

include_once '../admincon.php';
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet"
          href="../assets/css/dash.css">
    <link rel="stylesheet"
          href="../assets/css/dashres.css">
</head>
 
<body>
   
    <!-- for header part -->
    <header>
 
        <div class="logosec">
            <div class="logo">Employee</div>
           
 
    </header>
 
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img"
                            alt="dashboard"> <h3> Dashboard</h3>
                
                    </div>
 
                    <div class="option2 nav-option">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img"
                            alt="articles"><a href="alljob.php">
                        <h3> All Jobs</h3></a>
                    </div>
 
 
                    <div class="nav-option option4">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img"
                            alt="institution"><a href="applyview.php">
                                <h3> Applied Jobs</h3></a>
                       
                    </div>
 
                    <div class="nav-option option6">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img"
                            alt="report"><a href="#">
                        <h3> report</h3></a>
                    </div>
 
                    <div class="nav-option logout">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img"
                            alt="logout"><a href="../index.php">
                        <h3>logout</h3></a>
                    </div>
 
                </div>
            </nav>
        </div>
        <div class="main">
 
            <div class="searchbar2">
                <input type="text"
                       name=""
                       id=""
                       placeholder="Search">
                <div class="searchbtn">
                  <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn"
                        alt="search-button">
                  </div>
            </div>
            <?php

 
$retrive=mysqli_query($con,"select * from job_master");
$row=mysqli_num_rows($retrive);

$retrive1=mysqli_query($con,"select * from employer_master");
$row1=mysqli_num_rows($retrive1);

$retrive2=mysqli_query($con,"select * from job_apply_master");
$row2=mysqli_num_rows($retrive2);
?>
 
            <div class="box-container">
 
                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading"><?php echo $row;?></h2>
                        <h2 class="topic">Total Job</h2>
                    </div>
                    
 
                        
                             
                                                <img src=
                            "https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
                                                     alt="likes">
                                            </div>
                             
                                            <div class="box box3">
                                                <div class="text">
                                                    <h2 class="topic-heading"><?php echo $row1;?></h2>
                                                    <h2 class="topic">Total employer</h2>
                                                </div>
 
                    <img src=
                    "https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png"
                        alt="comments">
                </div>
 
                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading"><?php echo $row2;?></h2>
                        <h2 class="topic">Applied</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                </div>
            </div>
 
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Applied job</h1>
                    <button class="view">View All</button>
                </div>

                <div class="report-body">
                    <div class="report-topic-heading">
                        <table cellspacing="16">
                            <tr>
                        <th><h3 class="t-op">Slno.</h3></th>
                        <th><h3 class="t-op">logo</h3></th>
                        <th><h3 class="t-op">Com. Name</h3></th>
                        <th><h3 class="t-op">Category</h3></th>
                        <th><h3 class="t-op">Job_title</h3></th>
                        <th><h3 class="t-op">Location</h3></th>
                        <th><h3 class="t-op">Job_type</h3></th>
                        <th><h3 class="t-op">Position</h3></th>
                        <th><h3 class="t-op">Salary</h3></th>
                        <th><h3 class="t-op">Valid_upto</h3></th>
                        <th><h3 class="t-op">Undo</h3></th>
                            </tr>
                    </div>
                    <?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $q="delete from job_apply_master where jid='$id'";
    $r=mysqli_query($con,$q);
    if($r)
    {
        echo"<script>alert('Application Removed')</script>"; 
    }
    else{
   
    echo"<script>alert('something went worng')</script>";
    
    }
}



                    $c=1;
                   $d=$_SESSION['id'];
                    $query="select * from apply_view where eid='$d' order by aid;";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
                    {
                    ?>
                    <div class="items">
                        <div class="item1">
                            <tr>

                            <td><h3 class="t-op-nextlvl"><?php echo $c;?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><img width='50px' height='50px' src='../image/<?php echo $row["image"];?>' ></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["cname"];?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["course"];?></h3></td>
                            <td> <h3 class="t-op-nextlvl"><?php echo $row["job_title"];?></h3></td>
                            <td> <h3 class="t-op-nextlvl"><?php echo $row["location"];?></h3></td>
                            <td><h3 class="t-op-nextlvl"><?php echo $row["job_type"];?></h3></td>
                            <td><h3 class="t-op-nextlvl"><?php echo $row["position"];?></h3></td>
                            <td><h3 class="t-op-nextlvl"><?php echo $row["salary"];?></h3></td>
                           <td> <h3 class="t-op-nextlvl"><?php echo $row["valid_upto"];?></h3></td>

                            <td><h3 class="t-op-nextlvl"><a href="applyview.php?id=<?php echo $row['jid'];?>" >
                            <button style="background-color:green" type="button"  class="view" onclick="return confirm('Do you want to Undo Apply?')">Undo</button>
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