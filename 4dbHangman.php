<?php
$fd = fopen("4dbHangman.txt", 'a') or die("не удалось открыть файл");


for ($i = 1; $i <= 100; $i++)
{
$homepage = file_get_contents('https://random-word-api.herokuapp.com/word?number=1');

fwrite($fd, $homepage) ;
fwrite($fd, "\n");
}
fclose($fd);

?>
