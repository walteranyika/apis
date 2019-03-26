<?php

require 'conn.php';
//api to fetch one book
//receive data
header("Content-type:application/json");
if(isset($_POST['id']))
{
  extract($_POST);  
  $sql ="delete from books where id=$id";
  $result=mysqli_query($conn,$sql); 
  $response=array('status'=>'success');
  echo json_encode($response);
}
else
{
    $response=array('status'=>'failed');
    echo json_encode($response);
}