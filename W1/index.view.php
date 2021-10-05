<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>


<body>    
    <ul>
        <!-- Begin a php statement and a for each loop to create a list element for each item in the array -->
        <?php foreach ($animals as $animal) : ?>
            <!-- Use php temp var animal as the innerText to the list element -->
            <li><?= $animal; ?></li>
        <!-- End the php for each loop -->
        <?php endforeach; ?>
    </ul>
</body>

</html>