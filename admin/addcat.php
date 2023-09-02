<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet"
          href="../assets/css/dash.css">
    <link rel="stylesheet"
          href="../assets/css/dashres.css">
          <style>
            .btn {
  background-color: red; /* Green */
  border: none;
  color: white;
  padding: 10px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;

  border-radius: 12px;
}
            </style>
</head>
 
<body>
   
    <!-- for header part -->
    <header>
 
        <div class="logosec">
            <div class="logo">Admin</div>
           
 
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
                            alt="articles"><a href="allcat.php">
                        <h3> category</h3></a>
                    </div>
 
                    <div class="nav-option option3">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img"
                            alt="report"><a href="addcat.php">
                                <h3> Add Category</h3></a>
                       
                    </div>
 
                    <div class="nav-option option4">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img"
                            alt="institution"><a href="alljob.php">
                                <h3> All Job</h3></a>
                       
                    </div>
 
                    <div class="nav-option option5">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img"
                            alt="blog"><a href="allemployer.php">
                                <h3> employer</h3></a>
                      
                    </div>

                    <div class="nav-option option5">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img"
                            alt="blog"><a href="allemploye.php">
                                <h3> employee</h3></a>
                       
                    </div>
 
                    <div class="nav-option option6">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img"
                            alt="settings">
                        <h3> report</h3>
                    </div>
 
                    <div class="nav-option logout">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img"
                            alt="logout"><a href="../index.php">
                        <h3>Logout</h3></a>
                    </div>
 
                </div>
            </nav>
        </div>
        <div class="main">
 
           
    <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Add Category</h1>
                    
                </div>
                
                <body>
            <?php
 include ('../admincon.php');
 

 if(isset($_POST['res']))
 {  

$n=$_POST["cat_name"];

  $msg="insert into category_master(cat_name) values('$n')";
  
if(mysqli_query($con,$msg))
{
  echo"<script>alert('sucessfully inserted')</script>";

}
else
{
  echo"error:".mysqli_error($con);
}
mysqli_close($con);
 
}
?>

<div class="box box1">
<div class="text">
    <form  id="resister" action="" method="post" > 
    <label><b>  Catagory: </b>  </label>
 <input id="name" type="text" name="cat_name" placeholder="enter job types"required/>   
       
        <br><br>
        <button type="submit" class="view" name="res" ><span>save</span></button>  
         

       </div>
       </div>
</form>
    
     <br><br>   
                          
    </main>
    </body>
 
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <script src="./dash.js"></script>
</body>
</html>