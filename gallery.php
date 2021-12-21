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
            $my_foto = scandir('img');

            for ($i = 2; $i < count($my_foto); $i++) { ?>
                    <a href="fullfotos.php?img=<?= $my_foto[
                        $i
                    ] ?>"><img width="200px" height="100px" src="img/<?= $my_foto[
    $i
] ?>" alt="foto"></a>
                <?php }
            ?>

            
            
        </main> 
    
        <footer class="footer">

        </footer> 
     
</body>
</html>