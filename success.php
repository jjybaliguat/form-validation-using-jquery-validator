<?php
    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
<body>
    <h1>Email/number: <?php echo $user ?></h1>
    <h1>Password: <?php echo $pass ?></h1>
</body>
</html>