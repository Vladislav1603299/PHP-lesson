<?php
$text = $_GET['text'];

function textWhitespace($txt)
{
    $nothing = [' '];
    $whitespace = ['_'];
    echo str_replace($nothing, $whitespace, $txt);
}

textWhitespace($text);
?>
