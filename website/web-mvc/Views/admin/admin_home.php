<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
</head>
<body>
    <?php
        if (!empty($_SESSION['admin_login1']))
        {
            echo "working ! " . $_SESSION['admin_login1'];
        } else
        {

            echo "not work! " . $_SESSION['admin_login1'];
        }
    ?>
</body>
</html>