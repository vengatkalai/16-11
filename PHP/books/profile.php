<?php include 'login_check.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>

<p>
    <?php 

    

     echo "Our book list is click a books button! ";

    ?>
</p>
<a href="rent.php">Books</a>
<a href="logout.php">Logout</a>


</body>
</html>