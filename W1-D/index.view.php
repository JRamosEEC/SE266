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
        <!-- Begin a php statement and a for each loop to create a list element for each item in the array and store the key and it's value in temp vars-->
        <?php foreach ($task as $title => $val) : ?>
            <!-- Use php temp var title for the key and val for it's pair to use in the innerText to the list element -->
            <li><strong><?= $title; ?></strong> <?= $val; ?></li>
        <!-- End the php for each loop -->
        <?php endforeach; ?>
    </ul>
</body>

</html>