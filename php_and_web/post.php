<?php
    if(isset($_POST['submit'])){
        echo $_POST['name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post SUPERGLOBAL</title>
</head>
<body>
    
 <!--how works searching fotms-->

    <form action="post.php" method="post">
            <input type="text" name="name">
            <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>