<?php
$books = [
    "Do Androids Dream of Electric Sheep",
    "The Langoliers",
    "Hail Mary",
    "Batman"
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
<?php //foreach ($books as $book) {
//    // if you ant to add symbols, you can wrap variables in braces
////    echo "<li>{$book}™</li>";
////    echo "<li>$book</li>";
//}
////
//
//?>

<?php foreach ($books as $book) : ?>
<li>
    <?= $book ?>
</li>
    <?php endforeach; ?>
</ul>
</body>
</html>