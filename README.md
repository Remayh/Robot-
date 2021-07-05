# Robot-
Robot direction control interface

A control interface has been created that contains 5 buttons to control the direction of the robot

## ROBOT BASE CONTROL .HTML 

html code containing 5 buttons forward, backward ,left and right 

link it with php and css code to make the interface correct 
## Button style .css 

Buttons design to show the control interface appropriately

Coordination of the shape, size and colors of the buttons

## Robot .php 

php code to make the interface work properly by sending an if else function to control the moves

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
 
 and link it to the database
 
  ![ro](https://user-images.githubusercontent.com/85842623/124465025-94252b80-dd9d-11eb-9078-8667fa66ee9f.jpeg)
 
 ![robot](https://user-images.githubusercontent.com/85842623/124465182-c46cca00-dd9d-11eb-8bc2-7efb0fbb8620.jpeg)


 
 ## ROBOT2.php 
 
 Records the last movement or button pressed of the robot's movement
 
 $sql ="SELECT *FROM robots  ORDER BY id DESC LIMIT 1"; 
 
 ![robots](https://user-images.githubusercontent.com/85842623/124465027-95565880-dd9d-11eb-9318-102f03015074.jpeg)
 
 ## motor1.html 
 
 After I finished creating the robot movement control interface, it was integrated with the first task, which consisted of 6 robot engines.
 
 ## ro.jpeg 
 
 Convert embedded interfaces to mobile web view
 
 ![ro](https://user-images.githubusercontent.com/85842623/124465025-94252b80-dd9d-11eb-9078-8667fa66ee9f.jpeg)
 
