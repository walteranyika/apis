<?php

require 'conn.php';
header("Content-type:application/json");
//api to save data to the db
//receive data
if(isset($_POST['title']))
{
  extract($_POST);  
  $sql ="insert into books values(null, '$title','$author','$year','$cost')";
  mysqli_query($conn,$sql);
  $result=array('status','success');
  echo json_encode($result);
}
else
{
    $result=array('status','failed');
    echo json_encode($result);
}
