<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        form{
            margin-top: 20px;
            width: 100%;
            height: 400%;
            margin-left: 600px;
        }
        body{
            background-color: yellowgreen;
        }
        #name, #email, #phone_no{
            width: 770px;
            height: 50px;
            font-size: xx-large;
        }
        #lvl, #submit, #reset{
            font-size: larger;
        }
    </style>
</head>
<body>
    <form action="php_Mysql.php" method="post">
        <label for="name" id="lvl">NAME</label><br>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email" id="lvl">EMAIL</label><br>
        <input type="email" name="email" id="email" required><br><br>
        <label for="phone_no" id="lvl">Phone Number</label><br>
        <input type="text" name="phone_no", id="phone_no" maxlength="10" required><br><br>
        <label for="desc" id="lvl">Description</label><br>
        <textarea name="desc" id="desc" cols="80" rows="30" style="font-size: larger"></textarea><br><br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
    </form>
</body>
</html>
