<?php
$books = [
    [
        'name' =>  'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'https://www.amazon.com',
        'pubYear' => 2017

    ],
    [
        'name' => 'The Langoliers',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'https://www.amazon.com/andy-langoliers',
        'pubYear' => 2017

    ],
    [
        'name' => 'Hail Mary',
        'author' => 'Christ on a Bike',
        'purchaseUrl' => 'https://www.amazon.com/christ-on-a-bike',
        'pubYear' => 2018
    ],
    [
        'name' => 'Batman',
        'author' => 'DC Comics',
        'purchaseUrl' => 'https://www.amazon.com/dc-comics-batman',
        'pubYear' => 2019
    ]

]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;

        }
        h1 {
            font-weight:300;
        }
    </style>
</head>
<body>
<h1>Recommended Books</h1>
<ul>
    <?php foreach ($books as $book) : ?>
        <li>
           <a target="_blank" href='<?= $book['purchaseUrl'] ?>'><?= $book['name'] ?></a> - <?= $book['author'] ?> (<?= $book['pubYear'] ?>)
        </li>
    <?php endforeach; ?>
</ul>



</body>
</html>