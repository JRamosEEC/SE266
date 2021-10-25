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

        .wrapper {
            display: grid;
            grid-template-columns: 180px 300px;
        }

        label{
            text-align: right;
            padding-right: 10px;
            font-weight: bold;
        }
    </style>
</head>


<body>
    <form name="patient" method="POST">
        <?php if(!empty($_POST)){ echo $validateString; } ?> 

        <div>
            <div class="wrapper">
                <label>    First Name : </label>
                <input type="text" name="fName" value="<?PHP if(!empty($fName)){echo $fName;} ?>" ><br>
            </div>

            <div class="wrapper">
                <label>Last Name: </label>
                <input type="text" name="lName" value="<?PHP if(!empty($lName)){echo $lName;} ?>" ><br>
            </div>

            <div class="wrapper">
                <label>Married: </label>
                <div>
                    <input type="radio" name="isMarried" value="yes"  <?PHP if($isMarried == "yes"){echo "checked";} ?> >
                        Yes
                    <input type="radio" name="isMarried" value="no" <?PHP if($isMarried == "no"){echo "checked";} ?> >
                        No
                </div>
                <br>
            </div>

            <div class="wrapper">
                <label>Birth Date: </label>
                <input type="date" name="birthday" value="<?PHP if(!empty($birthday)){echo $birthday;} ?>" ><br>
            </div>

            <div class="wrapper">
                <label>Height: </label>
                <div>
                    Feet:
                    <input type="text" name="hFeet" style="width:80px;" value="<?PHP if(!empty($hFeet)){echo $hFeet;} ?>" >
                    Inches:
                    <input type="text" name="hInches" style="width:80px;" value="<?PHP if(!empty($hInches)){echo $hInches;} ?>" >
                </div>
                <br>
            </div>

            <div class="wrapper">
                <label>Weight (lbs): </label>
                <input type="text" name="weight" value="<?PHP if(!empty($weight)){echo $weight;} ?>" ><br>
            </div>
    
            <div>
                <input type="submit">
            </div>
        </div>
    </form>
</body>

</html>