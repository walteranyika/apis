<?php
require 'conn.php';
//api to fetch one book if ID is set
//receive data
header("Content-type:application/json");
if(isset($_POST['id']))
{
  extract($_POST);  
  $sql ="select * from books where id=$id limit 1";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    $row = mysqli_fetch_assoc($result);
    echo json_encode(array('status'=>'success','data'=>$row));
  }
  else
  {
      $response=array('status'=>'failed');
      echo json_encode($response);
  }

}else  //fetch all books
{
    $sql ="select * from books";
    $result=mysqli_query($conn,$sql);
    $data=[];
    while($row = mysqli_fetch_assoc($result))
    {
      $data=$row;
    }
    echo json_encode($data);    
}