<?php
echo 'Файл: ' . basename(__FILE__);
echo PHP_EOL;
echo 'Номер строки: ' . __LINE__;
echo PHP_EOL;

echo <<<HTML
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
    </head>
    <body>
      <h1>Привет мир!!!</h1>
    </body>
  </html>
HTML;
echo PHP_EOL;

$a='Рыба';
$b='человек';
echo $a . ' рыбою сыта, а ' . $b . ' человеком';