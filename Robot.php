<?php
$servesname="localhost";
$username="root";
$password="";
$dbname="robot";

    $conn=new mysqli($servesname,$username,$password,$dbname);
    if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}

elseif (isset($_POST['forward'])){  
   

     $sql="INSERT INTO  robots(Direction) value ('forward')";
     if($conn->query($sql)===true)
{
    echo"Forward";

}
else{
     echo"Error:".$sql."<br>".$conn->error;


}
}
elseif (isset($_POST['backward'])){  

 
      $sql="INSERT INTO robots(Direction) value ('backward')";
      if($conn->query($sql)===true)
 {
     echo"Backward";
 
 }
 else{
      echo"Error:".$sql."<br>".$conn->error;
 
 
 }

}
 elseif (isset($_POST['left'])){  
    
 
      $sql="INSERT INTO robots(Direction) value ('left')";
      if($conn->query($sql)===true)
 {
     echo"Left";
 
 }
 else{
      echo"Error:".$sql."<br>".$conn->error;
 
 
 }
}  elseif (isset($_POST['right'])){  

 
      $sql="INSERT INTO  robots(Direction) value ('right')";
      if($conn->query($sql)===true)
 {
     echo"Right";
 
 }
 else{
      echo"Error:".$sql."<br>".$conn->error;
 
 
 }
}
 elseif (isset($_POST['stop'])){  
    
 
      $sql="INSERT INTO  robots(Direction) value ('stop')";
      if($conn->query($sql)===true)
 {
     echo"Stop";
 
 }
 else{
      echo"Error:".$sql."<br>".$conn->error;
 
 
 }
$conn->close();
}
?>