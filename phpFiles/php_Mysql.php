<?php
$servername="localhost";
$username="root";
$password="";
$database="FormDetails";

if(isset($_POST['submit'])){
$a = $_REQUEST['name'];
$b = $_REQUEST['email'];
$c = $_REQUEST['phone_no'];
$d = $_REQUEST['desc'];
}
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Connection failed: ".mysqli_connect-error());

}else{
echo "Connection made successfully";
        $stmt= $conn->prepare("Insert into form (name,email,phone_no,description) values(?,?,?,?)");
        $stmt->bind_param("ssis",$a, $b, $c, $d);
        $stmt->execute();
        echo "data entered successfully";
        $stmt->close();
        $conn->close();
}
?>
