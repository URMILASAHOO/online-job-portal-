<?php
date_default_timezone_set('Asia/kolkata');
$con = mysqli_connect('localhost','root','','job_portal');
if(mysqli_connect_error())
 echo"<script>'connection Error'</script>";
 else
 echo"<script>'connection sucessfullS'</script>";
 ?>
