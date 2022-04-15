<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <style>
        .container{
            background: #414141;
            width: 800px;
            padding-bottom: 50px;
            margin: auto;
        }
        h1{
            text-align: center;
            background: red;
            color: white;
        }
        label{
            padding: 20px;
            margin-left: 35px;
            color: white;
            font-size: 20px;
        }
        input, textarea{
            width: 650px;
            padding: 5px 15px;
            margin: 15px;
            /*text-align: center;*/
            margin-left:50px;
        }

        .container input
        {
            font-size: 18px;
        }

        .btn-submit .btn{
            background: red;
            border-radius: 8px;
            color: white;
            padding: 15px;
            width: 650px;
        }

        .btn-submit .btn:hover{
            background: #fff;
            color: red;
        }



        .btn-submit{
            margin-top: 55px;
            text-align: center;
        }

        .back-home
        {
            margin-top: 50px;
            padding-left: 15px;
        }

        .back-home a.back-to-home
        {
            text-decoration: none;
            color: #fff;
        }

        .back-home a.back-to-home:hover
        {
            opacity: .8;
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <?php 
       if (isset($_GET['id']) && !empty($_GET['id'])) 
       { ?>
           <div class="container">
            <h1>Xóa sản phẩm</h1>
		    <form action="delete_post?id=<?=$_GET['id']?>" method="POST">

                <label for="">Tiếp tục xóa id [<?= $_GET['id'] ?>] </label><br>
                <div class="btn-submit">
                    <button class="btn">Xóa</button>
                </div>

                <div class="back-home">
                    <a  href="../" class="back-to-home">Back to Home</a>
                </div>

		</form>
    
    
    <?php }?>

	</div>
</body>
</html>