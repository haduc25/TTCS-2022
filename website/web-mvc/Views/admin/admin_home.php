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
        // session_start();

        // $_SESSION['ad'] = 123;

        // if (!empty($_SESSION['ad']))
        // {
        //     echo "working ! " . $_SESSION['ad'];
        // } else
        // {

        //     echo "not work! " . $_SESSION['ad'];
        // }

        if (!empty($_SESSION['test']))
        {
            echo "working ! " . $_SESSION['test'];
        } else
        {

            echo "not work! " . $_SESSION['test'];
        }


    ?>
</body>
</html>