<?php
$server = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($server, $username, $password);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$telephone=$_POST['telephone'];
$desc=$_POST['desc'];
$sql="INSERT INTO trip('name','age')VALUE('$name','$age')";
if(mysqli_query($con,$sql))
{
  echo "connection su";
}
else{
  echo "error".$sql."<br>".mysqli_error($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h3 style="font-size=50px">Welcome to SRM University US trip form</h3>
        <p>Enter your details and submit to confirm your participation in trip</p>
    <form action="login.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter the name"><br>
    <input type="text" name="age" id="age" placeholder="Enter age"><br>
    <input type="text" name="gender" id="gender" placeholder="Enter Gender"><br>
    <input type="phone" name="telephone number" placeholder="Enter your Phone number"><br>
    <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter Any other information"></textarea><br>
    <button class="btn">Submit</button>

    </form>
    </div>
    <script src="index.js"></script>
</body>
</html>