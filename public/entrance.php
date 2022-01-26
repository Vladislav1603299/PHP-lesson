<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; flex-direction:column; margin-top: 150px">
    <h3 style="text-align: center;">Entrance</h3>
    <div style="border: 1px solid black; width:250px; height: 250px; text-align:center; margin: 0 auto; margin-top: 20px">
        <form action="../controllers/core_server_r_e.php" method="post"  enctype="multipart/form-data">
            <p>Enter login</p>
            <input type="text" name="entrance_login" required>
            <p style="margin-top: 20px;">Enter password</p>
            <input type="password" name="entrance_password" required>
            <div style="text-align: center; margin-top: 20px; margin-bottom: 50px ;">
                <input style="width: 100px" class="btn btn-primary" type="submit" name="entrance_submit" value="Enter">
            </div>
        </form>
        <p>Not registered? <a href="registration.php">Registration</a></p>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>