<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Gallery</title>
</head>
<body>
    <header class="header">
        <h1 class="header_name">My Gallery</h1>
    </header>
    <main class="main">
        <form class="main_block_loading" action="server.php" method="post" enctype="multipart/form-data">
            <p style="color: red">ВЫБЕРЕТЕ ФАЙЛ ДЛЯ ЗАГРУЗКИ</p>
            <div>
                <input class="input1" type="file" name="foto" accept="image/*">
                <input class="input2" type="submit" value="Загрузить">
            </div>
        </form>
    <?php
        include_once "config.php";
        $sql = "SELECT * FROM fotos ORDER BY count desc";
        $res = mysqli_query($connect, $sql);
        while($data = mysqli_fetch_assoc($res)){?>
            <a href="fullfotos.php?id=<?= $data['id'];?>&img=<?= $data['name_foto'];?>"><img width="200px" height="100px" src="img/<?= $data['name_foto'];?>" alt="foto"></a>
    <?php 
        
    }
    ?>     
    </main> 
    <footer class="footer">

    </footer> 
</body>
</html>