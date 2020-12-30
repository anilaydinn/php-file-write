<?php error_reporting(true); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <style>
        .container{
            display:flex;
            height: 100%;
            width: 100%;
            justify-content: center;
        }
        .form-container{
            width: 300px;
            height: 500px;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <?php 
                if($_GET['error'] == "false") { ?>
                    <h5>User saved</h5>
                    <h5>Image successfully upload</h5>
                <?php } ?>
            <form action="process.php" method="POST">
                <input type="text" name="nameandsurname" placeholder="Name and Surname"><br>
                <input type="text" name="id" placeholder="ID">
                <input type="text" name="country" placeholder="Country">
                <input type="file" name="image">
                <input type="Submit" name="submit">
            </form> 
        </div>
    </div>
</body>
</html>