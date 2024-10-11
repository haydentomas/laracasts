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
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'https://www.amazon.com/martian',
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

];

//function filter ($items, $fn) {
//    $filteredItems = [];
//    foreach ($items as $item) {
//        if ($fn($item)) {
//            $filteredItems[] = $item;
//        }
//    }
//    return $filteredItems;
//}

// The code below works in exactly the same way as teh code above, which is commented out!
$filteredBooks = array_filter($books, function ($book) {
    return $book ['pubYear'] > 2017 && $book ['pubYear'] < 2019;
});

 require "views/index.view.php";