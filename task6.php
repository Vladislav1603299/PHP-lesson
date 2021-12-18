<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="task6.css">
    <title>Document</title>
</head>
<body>
    <?php $arrMenu = [
        'Мужское' => ['Пиджаки', 'Брюки', 'Галстуки', 'Рубашки'],
        'Женское' => ['Платье', 'Туфли', 'Блузки', 'Штаны'],
        'Детское' => [
            'Игрушки',
            'Обувь',
            'Верхняя одежда',
            'Футболки',
            'Шорты',
        ],
    ]; ?>
    <ul class = "ul"><?php foreach ($arrMenu as $key => $value) {
        $block = '<div>';
        $a = '<li class = "li">' . $key . '</li>';
        $block .= $a;
        foreach ($value as $list) {
            $block .=
                '<div class = "list"><a class = "list" href="#">' .
                $list .
                '</a></div>';
        }
        $block .= '</div>';

        echo $block;
    } ?></ul>
    
</body>
</html>



