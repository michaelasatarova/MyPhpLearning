<?php 
    if(isset($_POST['submit'])){
        $username = $_POST['user_name'];
        $password = $_POST['password'];
  

    if(strlen($username)< 5){
        echo "username has to be longer than 5";
    }
  }
    echo $password;
    echo $username;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="forms.php" method="post">
    <input type="text" placeholder="name" name="user_name">
    <input type="password" placeholder="text" name="password">
    <br>
    <input type="submit" name="submit">
</form>

<?php
    
?>

</body>
</html>