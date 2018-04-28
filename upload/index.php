<!DOCTYPE html>
<html>
<head>
	<title>Password Protected Poster</title>
</head>
<body>

</body>
</html>

<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "username"
&& $pass == "password")
{
        include("uploader.php");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST" action="uploader.php">
            User <input type="text" name="user"></input><br/>
            Pass <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
    <?}
}
?>
