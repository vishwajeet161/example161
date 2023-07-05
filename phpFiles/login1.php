<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "FormDetails";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
	echo "hello<br>";
    $sql = "SELECT * FROM login WHERE username = '$username' AND password ='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
mysqli_close($conn);
?>

