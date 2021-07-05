<?php
$servesname="localhost";
$username="root";
$password="";
$dbname="robot";

    $conn=new mysqli($servesname,$username,$password,$dbname);
    if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
$sql ="SELECT *FROM robots  ORDER BY id DESC LIMIT 1";
 
$result=$conn->query($sql);
 if ($result->num_rows >0){
 while ( $row=$result->fetch_assoc()) {
    echo"Direction: ".$row["Direction"];
     
   
    
 }
 }else{
echo"0 results";
 }
 $conn->close();
 ?>
