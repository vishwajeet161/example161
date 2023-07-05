<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp Form</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1 align='center'>Sign Up</h1>
        First Name :<input type="text" name='Fname' class="one"><br><br>
        Middle Name :<input type="text" name="Mname" class ="one"><br><br>
        Last Name :<input type="text" name="Lname" class = "one"><br><br>
        Password :<input type="passsword" name="password" class ="one"><br><br>
        Confirm Password :<input type="password" name="cnfpassword" class="one"><br><br>
        Email : <input type="email" name="email" class="one"><br><br>
        Contact No. : <input type="number" name="contact" class="one"><br><br>
        Gender : <input type="radio" name="gender" id="gender" value="Male">Male
                 <input type="radio" name="gender" id="gender" value="Female">Female<br><br>
        Address : <br><textarea name="address" class="one" cols="30" rows="10"></textarea><br><br>
        Pincode : <input type="number" name="pincode" class="one"><br><br>
        City : <select name="city" class="one">
                <option value="">--SELECT--</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Banglore">Banglore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Pune">Pune</option>
        </select><br><br>
        Country : <select name="country" class="one">
                    <option value="">--SELECT--</option>
                    <option value="India">India</option>
        </select><br><br>
        Skills : <input type="radio" name="skill" id="skill" value="php">PHP 
                 <input type="radio" name="skill" id="skill" value="java">JAVA
                 <input type="radio" name="skill" id="skill" value=".net">.NET
                 <input type="radio" name="skill" id="skill" value=".JQuery">.JQUERY
                 <input type="radio" name="skill" id="skill" value=".Ajex">.AJEX <br><br>
        <input type="file" name="file" id="file"><br><br>
        <input type="radio" name="terms" id="terms">I have read the terms and conditions <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>