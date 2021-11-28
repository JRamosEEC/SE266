<?php
    require (__DIR__ . "/editDB.php");

    $action = $_GET["action"] ?? $_POST['action'] ?? 'add';
    $patientId = $_GET["id"] ?? $_POST['patientId'] ?? '';

    $patientData = getPatients();

    if(!empty($_POST) || $action != 'edit'){
        $fName = $_POST['fName'] ?? "";
        $lName = $_POST['lName'] ?? "";
        $isMarried = $_POST['isMarried'] ?? "";
        $birthday = $_POST['birthDate'] ?? "";
    }
    else{
        foreach ($patientData as $key => $value){
            if ($patientData[$key]['id'] == $patientId){
                $fName = $patientData[$key]['patientFirstName'];
                $lName = $patientData[$key]['patientLastName'];
                $birthday = $patientData[$key]['patientBirthDate'];

                if($patientData[$key]['patientMarried'] == 1){
                    $isMarried = "1";
                }
                else{
                    $isMarried = "0";
                }
            }
        }
    }

    $validateString = ""; 

    if(empty($fName)){
        $validateString .= "<p style='color: red;'>Please provide your first name</p>";
    } 
    if(empty($lName)){
        $validateString .= "<p style='color: red;'>Please provide your last name</p>";
    }
    if($isMarried == ""){
        $validateString .= "<p style='color: red;'>Please provide your marital status</p>";
    }
    if(empty($birthday)){
        $validateString .= "<p style='color: red;'>Please provide your birth date</p>";
    }
    else{
        $date = explode("-", $birthday);

        if(!checkdate($date[1], $date[2], $date[0]))
        {
            $validateString .= "<p style='color: red;'>Please provide a valid birth date</p>";
        }
        else{
            if($date[0] > date("Y"))
            {
                $validateString .= "<p style='color: red;'>Birth date can't be in the future</p>";
            }
            else{
                if($date[0] == date("Y") && $date[1] > date("n"))
                {
                    $validateString .= "<p style='color: red;'>Birth date can't be in the future</p>";
                }
                else{
                    if($date[0] == date("Y") && $date[1] == date("n") && $date[2] > date("d"))
                    {
                        $validateString .= "<p style='color: red;'>Birth date can't be in the future</p>";
                    }
                }
            }
        }
    }

    if(isset($_POST['addPatient']) && empty($validateString))
    {
        addPatients($fName, $lName, $isMarried, $birthday);
        header('Location: viewPatients.php');
    }
    elseif(isset($_POST['updatePatient']) && empty($validateString))
    {
        updatePatients($patientId, $fName, $lName, $isMarried, $birthday);
        header('Location: viewPatients.php');
    }
    elseif(isset($_POST['deletePatient']) && empty($validateString))
    {
        delPatients($patientId);
        header('Location: viewPatients.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <style type="text/css">

       .wrapper {
            display: grid;
            grid-template-columns: 180px 400px;
        }

        .measurementWrapper {
            width: 600px;
            display: flex;
            flex-wrap: wrap;
            margin-left: 40px;
        }
        .measurementWrapper > div {
            flex: 1 1 100px;
        }
        .label {
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
            background-color: white;
            color: black;
        }
        label {
           font-weight: bold;
        }
        input[type=text] {width: 120px;}
        .error {color: red;}
    </style>

    <title>Edit Patient</title>
</head>

<body>
    <div style="text-align:right;">
        <a href="viewPatients.php">View all Patients</a>
    </div>
    <div style="margin-left:50px;">
        <h2> Patient Information</h2>
    </div>
  
    <form action="editPatient.php" method="post">
        <?php if(!empty($_POST)){ echo $validateString; } ?> 
        
        <input type="hidden" name="action" value="<?PHP echo $_GET["action"] ?? $action; ?>">
        <input type="hidden" name="patientId" value="<?PHP echo $_GET["id"] ?? $patientId; ?>">

        <div class="wrapper">
            <div class="label">
                <label>First Name:</label>
            </div>
            <div>
                <input type="text" name="fName" value="<?PHP if(!empty($fName)){echo $fName;} ?>">
            </div>
            <div class="label">
                <label>Last Name:</label>
            </div>
            <div>
                <input type="text" name="lName" value="<?PHP if(!empty($lName)){echo $lName;} ?>">
            </div>
            <div class="label">
                    <label>Married:</label>
                </div>
                <div>
                    <input type="radio" name="isMarried" value="1" <?PHP if($isMarried == "1"){echo "checked";} ?>>Yes                  
                    <input type="radio" name="isMarried" value="0" <?PHP if($isMarried == "0"){echo "checked";} ?>>No                  
                </div>         
                <div class="label">
                    <label>Birth Date:</label>
                </div>
                <div>
                    <input type="date" name="birthDate" value="<?PHP if(!empty($birthday)){echo $birthday;} ?>">                 
                </div>
                <div>
                    &nbsp;
                </div>

                <?PHP
                    if($action == "edit"){
                        echo '<div><input type="submit" name="updatePatient" value="Update Patient Information"><input type="submit" name="deletePatient" value="Delete Patient"></div>';
                    }
                    else{
                        echo '<div><input type="submit" name="addPatient" value="Add Patient Information"></div>';
                    }
                ?>
        </div>
    </form>
</html>