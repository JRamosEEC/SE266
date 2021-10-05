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
            
            <!-- Start a php if to see if the key is the boolean 'completed if not print both foreach variables-->
            <?php if ($title != 'completed') : ?>
                <!-- Use php temp var title for the key and val for it's pair to use in the innerText to the list element -->
                <li><strong><?= $title; ?></strong> <?= $val; ?></li>
            <!-- Else must mean this is the boolean key 'completed, therefore check if the value is true or false and indicate if the task is completed or not -->
            <?php else : ?>
                <!-- Evaluate the 'completed' key to be true or false and the display if the task was completed or not -->
                <?php if ($val) : ?>
                    <!-- Task is completed and the key = true-->
                    <li><strong><?= $title; ?></strong> Complete</li>
                <?php else : ?>
                    <!-- Task is no completed and the key = false -->
                    <li><strong><?= $title; ?></strong> Incomplete</li> 
                <!-- End the two if statements -->
                <?php endif; ?>
            <?php endif; ?>
        <!-- End the php for each loop -->
        <?php endforeach; ?>
    </ul>
</body>

</html>