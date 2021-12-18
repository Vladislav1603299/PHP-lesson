<?php


$text = $_GET['text'];

function str($txt)
{
    $letters = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'i',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kx',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ы' => 'y',
        'ъ' => 'ie',
        'э' => 'e',
        'ю' => 'iu',
        'я' => 'ia',
    ];

    return strtr(mb_strtolower($txt), $letters);
};


function textWhitespace($txt)
{
    return str_replace(" ", "_", $txt);
};



function addText($txt){
   return textWhitespace(str($txt));
};

echo addText($text);
?>