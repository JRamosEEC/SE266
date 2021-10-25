<?php //Begin php statement

$fName = $_POST['fName'] ?? "";
$lName = $_POST['lName'] ?? "";
$isMarried = $_POST['isMarried'] ?? "";
$birthday = $_POST['birthday'] ?? "";
$hFeet = $_POST['hFeet'] ?? "";
$hInches = $_POST['hInches'] ?? "";
$weight = $_POST['weight'] ?? "";

$validateString = "";

if(!empty($_POST))
{
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
    if(empty($hFeet)){
        $validateString .= "<p style='color: red;'>Please provide your height</p>";
    }
    else{
        if(empty($hInches)){
            $validateString .= "<p style='color: red;'>Please provide your height</p>";
        }
        else{
            //Tallest man on earth was just under 9 feet so nothing over 9
            if($hFeet < 0 || $hFeet > 9 || $hInches < 0 || $hInches > 12)
            {
                $validateString .= "<p style='color: red;'>Please provide a valid height</p>";
            }
        }
    }
    if(empty($weight)){
        $validateString .= "<p style='color: red;'>Please provide your weight</p>";
    }
    else{
        //Heaviest man in the world weighed approx 1400lbs so nothing over
        if($weight < 0 || $weight > 1400)
        {
            $validateString .= "<p style='color: red;'>Please provide a valid weight</p>";
        }
    }
}

//Send code to index view php code
require 'index.view.php';