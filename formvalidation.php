<html><head>
<title>registration form</title>
</head>
<body>

<h2>REGISTRATION FORM</h2>

<form name="form" action=""  method="POST">
username:<input type="text" name="name"></td><br>
password:<input type="password" name="fps"></td><br>
email:<input type="email" name="email"></td><br>
Mobile number:<input type="number" name="pnum"><br><br>
<input type="submit" value="Submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
$username=$_POST['name'];
$password=$_POST['fps'];
$email=$_POST['email'];
$pnum=$_POST['pnum'];
if(empty($username))
{
 echo "<script>alert('enter username')</script>";
}
else if(empty($email))
{
 echo "<script>alert('enter email')</script>";
}
else if(empty($password))
{
 echo "<script>alert('enter password')</script>";
}
else if(strlen($password)<8)
{
 echo "<script>alert('password must have 8 characters')</script>";
}
else if(empty($pnum))
{
 echo "<script>alert('enter phone number')</script>";
}
else if(strlen($pnum)!=10)
{
 echo "<script>alert('enter valid phone number')</script>";
}
else
{
 echo "<script>alert('registration successful')</script>";
}
}
?>
</body>
</html>
