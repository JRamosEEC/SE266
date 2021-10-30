<?php
    //Require our account php which contains the classes
    require 'account.php';

    //Checks if the data is empty meaning this is the first run of the page - If so use the default data
    if(empty($_POST))
    {
        //Create new account objects with default values
        $checking = new CheckingAccount('C123', 1000, '12-20-2019');
        $savings = new SavingsAccount('S123', 5000, '03-20-2020');

        //Declare variables and get their values from the class
        $cActID = $checking->getAccountId();
        $cDate = $checking->getStartDate();
        $cBal = $checking->getBalance();
        $sActID = $savings->getAccountId();
        $sDate = $savings->getStartDate();
        $sBal = $savings->getBalance();
    }
    else
    {
        //Get values from the hidden form fields and create the accounts again with the new data
        $checking = new CheckingAccount($_POST['checkingAccountId'], $_POST['checkingBalance'], $_POST['checkingDate']);
        $savings = new SavingsAccount($_POST['savingsAccountId'], $_POST['savingsBalance'], $_POST['savingsDate']);

        $cActID = $checking->getAccountId();
        $cDate = $checking->getStartDate();
        $cBal = $checking->getBalance();
        $sActID = $savings->getAccountId();
        $sDate = $savings->getStartDate();
        $sBal = $savings->getBalance();

        //Determine which submit button is clicked and if the field with it is filled or not and it is an integer
        if(isset($_POST['withdrawChecking']) && !empty($_POST['checkingWithdrawAmount']) && is_numeric($_POST['checkingWithdrawAmount']))
        {
            //Declare a temp variable of the field value
            $cWithdraw = $_POST['checkingWithdrawAmount'];

            //Call the class to update the balance and set our variable to the getter value
            $checking->withdrawal($cWithdraw);
            $cBal = $checking->getBalance();
        }
        elseif(isset($_POST['depositChecking']) && !empty($_POST['checkingDepositAmount']) && is_numeric($_POST['checkingDepositAmount']))
        {
            $cDeposit = $_POST['checkingDepositAmount'];

            $checking->deposit($cDeposit);
            $cBal = $checking->getBalance();
        }
        elseif(isset($_POST['withdrawSavings']) && !empty($_POST['savingsWithdrawAmount']) && is_numeric($_POST['savingsWithdrawAmount']))
        {
            $sWithdraw = $_POST['savingsWithdrawAmount'];

            $savings->withdrawal($sWithdraw);
            $sBal = $savings->getBalance();
        }
        elseif(isset($_POST['depositSavings']) && !empty($_POST['savingsDepositAmount']) && is_numeric($_POST['savingsDepositAmount']))
        {
            $sDeposit = $_POST['savingsDepositAmount'];

            $savings->deposit($sDeposit);
            $sBal = $savings->getBalance();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <style>
        body {
            margin-left: 120px;
            margin-top: 50px;
        }
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
        .account {
            border: 1px solid black;
            padding: 10px;
        }
        .wrapper {
            display: grid;
            grid-template-columns: 300px 300px;
        }

        label{
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    
    <form name="ATM" method="post" action="">
       
        <input type="hidden" name="checkingAccountId" value="<?PHP if(!empty($cActID)){echo $cActID;} ?>" />
        <input type="hidden" name="checkingDate" value="<?PHP if(!empty($cDate)){echo $cDate;} ?>" />
        <input type="hidden" name="checkingBalance" value="<?PHP if(!empty($cBal)){echo $cBal;}else{echo 0;} ?>" />
        <input type="hidden" name="savingsAccountId" value="<?PHP if(!empty($sActID)){echo $sActID;} ?>" />
        <input type="hidden" name="savingsDate" value="<?PHP if(!empty($sDate)){echo $sDate;} ?>" />
        <input type="hidden" name="savingsBalance" value="<?PHP if(!empty($sBal)){echo $sBal;}else{echo 0;} ?>" />
        
    <h1>ATM</h1>
        <div class="wrapper">  
            <div class="account">

                <li>Account ID: <?PHP if(!empty($cActID)){echo $cActID;} ?></li>
                <li>Balance: <?PHP if(!empty($cBal)){echo $cBal;}else{echo 0;} ?></li>
                <li>Account Opened: <?PHP if(!empty($cDate)){echo $cDate;} ?></li>
                    
                <div class="accountInner">
                    <input type="text" name="checkingWithdrawAmount" value="" />
                    <input type="submit" name="withdrawChecking" value="Withdraw" />
                </div>
                <div class="accountInner">
                    <input type="text" name="checkingDepositAmount" value="" />
                    <input type="submit" name="depositChecking" value="Deposit" /><br />
                </div>
            </div>

            <div class="account">
               
                <li>Account ID: <?PHP if(!empty($sActID)){echo $sActID;} ?></li>
                <li>Balance: <?PHP if(!empty($sBal)){echo $sBal;}else{echo 0;} ?></li>
                <li>Account Opened: <?PHP if(!empty($sDate)){echo $sDate;} ?></li>

                <div class="accountInner">
                    <input type="text" name="savingsWithdrawAmount" value="" />
                    <input type="submit" name="withdrawSavings" value="Withdraw" />
                </div>
                <div class="accountInner">
                    <input type="text" name="savingsDepositAmount" value="" />
                    <input type="submit" name="depositSavings" value="Deposit" /><br />
                </div>
            </div>
            
        </div>
    </form>
</body>

</html>