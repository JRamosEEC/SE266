<?php
    include (__DIR__ . "/db.php");
    require (__DIR__ . "/editDB.php");

    $patientData = getPatients();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">    <title>Patients</title>

    <style>
        h1{margin-top: auto; margin-bottom: auto;}

        .button
        {
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;

            color: white;
            font-weight: bold;
            background-color: LightSkyBlue;
        }

        .header{padding-top: 20px;}
    </style>
</head>

<body>
    <div class="container">
        <div id="Header" class="row header align-items-center">
            <div class="col-sm-6">
                <h1>Patients</h1>
            </div>

            <div class="col-sm-6">
                <a class="button" href="editPatient.php?action=add">Add Patient</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                        <th>Married</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    <?PHP foreach($patientData as $row): ?>
                        <tr>
                            <td><?PHP echo $row['id']; ?></td>
                            <td><?PHP echo $row['patientFirstName']; ?></td>
                            <td><?PHP echo $row['patientLastName']; ?></td>
                            <td><?PHP echo $row['patientBirthDate']; ?></td>
                            <td><?PHP echo date_diff(new DateTime(), date_create($row['patientBirthDate']))->y; ?></td>
                            <td><?PHP if($row['patientMarried'] == 1){echo "YES";}else{echo "NO";}; ?></td>
                            <td><?PHP echo '<a href="editPatient.php?action=edit&amp;id=' . $row['id'] . '" style="text-decoration: none;"><i class="icon-pencil"></i> </a></td>'; ?>
                        </tr>
                    <?PHP endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>