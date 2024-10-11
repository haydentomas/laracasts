<?php
// string
$name = 'Dark Matter';
//boolean
$read = false;

// Conditional
if ($read) $message = 'You have read "Dark Matter!"';
else $message = 'You have not read "Dark Matter!"';


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
            display:grid;
            place-items:center;
            height:100vh;
            font-family: sans-serif;
            background: black;
            color:#fff;

        }
    </style>
</head>
<body>
<h1>

    
    <?= $message ?>



</h1>


<h2>
</h2>
</body>
</html>