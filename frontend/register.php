<?php
$uname1 =$_POST[];
$email  =$_POST[];
$unum   =$_POST[];
$upswd1 =$_POST[];
$upswd2 =$_POST[];

if((!empty($uname1))||!empty($email)||!empty($unum)||!empty($upswd1)||!empty($upswd2) )
{
$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname= "farming_rental";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $insert="Insert into farming_rental (uname1,email,unum,upswd1,upswd2)values(?,?,?,?)";
if($rnum==0){
    $stmt->close():
    $stmt=$conn->prepare($insert);
    $stmt->bind_prepare("ssiss",$uname1,$email,$unum,$upswd1,$uname2);
    $stmt->execute();
    echo"new recor inserted succesfully";
}
$stmt->close();
$conn->close();

}
else{
    echo"all field are required";
    die();
}
?>