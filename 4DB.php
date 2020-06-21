
<?php
$fd = fopen("4db.txt", 'a') or die("не удалось открыть файл");


for ($i = 1; $i <= 3000; $i++)
{
$homepage = file_get_contents('http://numbersapi.com/random?min=1&max=100000');

fwrite($fd, $homepage) ;
fwrite($fd, "\n");
}
fclose($fd);

?>
