<?php 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
   $password= $_POST['password'];


   $connections = mysqli_connect('localhost', 'root', '', 'loginapp');
        if($connections){
            echo "we are connected";
        }else{
            die("failed");
        }

  /*   vlozenie hodnoty ado riadku username a password z hodnoty ktoru sme dostali a ulozili v premennej $username a $password */
 /*        $query = "INSERT INTO users(username, password)";
        $query .= "VALUE ('$username', '$password')"; */

        $query = "SELECT * FROM users ";

        $result = mysqli_query($connections, $query);

        if(!$result){
            die('Query failed');
        }


   if($username && $password){  
       echo $username;
       echo $password;
   }else{
       echo "no scredentials";
   }

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

    <div class="container">
        <h1>Login</h1>

        <div class="col-xs-6">

        <?php
      /*   fetch data from db */
        while($row = mysqli_fetch_row($result)){
            print_r($row);
        }
        
        ?>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username"></label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary mt-3" type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>


</body>

</html>