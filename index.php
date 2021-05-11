<?php

    require_once 'User.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP_OOP_2</title>
</head>
<body>
    <?php foreach ($users as $user) { ?>   
            <div class="card">
                <h4>First Name: <?php echo $user -> first_name ?></h4>
                <h4>Last Name: <?php echo $user -> last_name ?></h4>
                <h4>Username: <?php echo $user -> username ?></h4>
                <h4>Password: <?php echo $user -> password ?></h4>
                <h4>Email Address: <?php echo $user -> email_address ?></h4>
                <h4>Account Status: <?php echo $user -> account_status ?></h4>
            </div>
    <?php } ?>   
</body>
</html>