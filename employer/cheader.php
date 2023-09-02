<?php
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
    <title>Employer</title>
    <link rel="stylesheet"
          href="../assets/css/dash.css">
    <link rel="stylesheet"
          href="../assets/css/dashres.css">
</head>
 
<body>

   
    <!-- for header part -->
   
     <header>
 
 <div class="logosec">
     <div class="logo">Employer</div>
    

</header>

    
 <div class="main-container">
     <div class="navcontainer">
         <nav class="nav">
             <div class="nav-upper-options">
                 <div class="nav-option option1">
                     <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                         class="nav-img"
                         alt="dashboard">
                     <h3> Dashboard</h3>
                 </div>

                 <div class="option2 nav-option">
                     <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                         class="nav-img"
                         alt="articles"><a href="jobpost.php?cid=<?php echo $id;?>">
                     <h3> Post job</h3></a>
                 </div>

                 <div class="nav-option option3">
                     <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                         class="nav-img"
                         alt="report"><a href=".applycandidate.php">
                             <h3>Candidate</h3></a>
                    
                 </div>

                 <div class="nav-option option4">
                     <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                         class="nav-img"
                         alt="institution"><a href="job.php?id=<?php echo $id;?>">
                             <h3> view post job</h3></a>
                    
                 </div>

               
                 <div class="nav-option option6">
                     <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                         class="nav-img"
                         alt="settings">
                     <h3> setting</h3>
                 </div>

                 <div class="nav-option logout">
                     <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                         class="nav-img"
                         alt="logout"><a href="logout">
                     <h3>Log Out</h3></a>
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

$retrive2=mysqli_query($con,"select * from employe_master");
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
                        <h2 class="topic">Total Employe</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                </div>
            </div>
            <script src="./dash.js"></script>
</body>
</html>