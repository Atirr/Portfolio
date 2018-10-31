<!DOCTYPE html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="registrationform";
try{
$conn = "mysqli_connect"($servername, $username, $password, $dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$register_query = "INSERT INTO `form`(`fname`, `mname`, `lname`, `address`, `gender`, `phone`, `email`, `username`, `password`) VALUES ('$fname','$mname','$lname','$address','$gender','$phone','$email','$user','$pass')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Student</title>
</head>

<body>


    <form action="" method="post">
        <p align="center">New Student</p>
        <table align="center">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="firstname"
                placeholder="enter your first name"></td>
                <td><input type="text" name="lastname"
                placehoder="enter your last name"></td>
</tr>
<tr>
    <td>Adress</td>
    <td><input type="text" name="address"
    placeholder="enter your address"></td>
</tr>
<tr>
   <td>Gender</td>
   <td><input type="radio" name="gender" value="male">Male</td>
   <td><input type="radio" name="gender" value="female">Female</td>
   <td><input type="radio" name="gender" value="others">Others</td>
</tr>
<tr>
    <td>Phone:</td>
    <td><input type="tel" name="phone"
    placeholder="enter your phone no"></td>
</tr>
<tr>
    <td>email:</td>
    <td><input type="email" name="email"
    placeholder="example@example.com"></td>
</tr>
<tr>
<td>username:</td>
<td><input type="text" name="username" placeholder="enter your username"></td>
</tr>
<tr>
    <td>password:</td>
    <td><input type="password" name="password"></td>
</tr>
<tr>
   <td></td>
    <td><input type="submit" name="submit" value="Signup">
</td>
</tr>
</table>
</form>


</body>
</html>