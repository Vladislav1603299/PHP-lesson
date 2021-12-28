<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form style="display: flex; align-items: center ;" action="server.php">
    <input style="width: 30px; margin-left: 10px" type="text" name="num1">
    <input style="margin-left: 10px" type="submit" name="sum" value="+">
    <input style="margin-left: 10px" type="submit" name="diff" value="-">
    <input style="margin-left: 10px" type="submit" name="mult" value="*">
    <input style="margin-left: 10px" type="submit" name="div" value="/">
    <input style="width: 30px; margin-left: 10px" type="text" name="num2">
    
    <p style="margin-left: 10px">=</p>
  
    <?= $_GET['res']; ?>
</form>
</body>
</html>