<?php 
  // $hostname = "localhost";
  // $username = "root";
  // $password = "";
  // $conn = new mysqli($hostname,$username,$password);
  // if($conn->connect_error){
  //   die("Connection Failed ".$conn->connect_error);
  // }
  // $sql = "CREATE DATABASE CollegeWebsite";
  // if($conn->query($sql) === true){
  //   echo "Database created successfully";
  // }else{
  //   echo "Error creating database ".$conn->error;
  // }
  // $conn->close();

  
  // $hostname = "localhost";
  // $username = "root";
  // $password = "";
  // $dbname = "CollegeWebsite";
  // $conn = new mysqli($hostname,$username,$password,$dbname);
  // if($conn->connect_error){
  //   die("Connection Failed ".$conn->connect_error);
  // }
  // $sql = "CREATE TABLE User(
  //   username varchar(120) NOT NULL,
  //   pass varchar(10) NOT NULL,
  //   PRIMARY KEY (username)
  // )";
  // if($conn->query($sql) === true){
  //   echo "Table Created Successfully";
  // }else{
  //   echo "Error creating table ".$conn->error;
  // }
  // $conn->close();

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "CollegeWebsite";
  $conn = new mysqli($hostname,$username,$password,$dbname);

  if($conn->connect_error){
    die("Connection Failed ".$conn->connect_error);
  }
  if(isset($_POST["submit"])){
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $sql = "SELECT * FROM User WHERE username='$user' AND pass='$pass' ";

    $result = $conn->query($sql);
    if($result->num_rows > 0){
      echo "<h1>Welcome, $user</h1>";
    }else{
      echo "<h2>Invalid Username or Password</h2>";
    }
  }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
  <h1>Login Page</h1>
  <form action="" method="post">
    <p>Username: <input type="text" name="user" id="username"></p>
    <p>Password: <input type="password" name="pass" id="password"></p>
    <p><input type="submit" name="submit" value="login"></p>
  </form>
</body>
</html>

<?php
  }
  $conn->close();
?>