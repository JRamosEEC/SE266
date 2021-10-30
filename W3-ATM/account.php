<?php
    abstract class Account {
        protected $accountId, $balance, $startDate;
        
        public function __construct ($id, $b, $sd) {
           $this->accountId = $id;
           $this->balance = $b;
           $this->startDate = $sd;
        }
        public function deposit ($amount) {
            $this->balance += $amount;
        }

        abstract public function withdrawal($amount);
        // this is an abstract method. This method must be defined in all classes
        // that inherit from this class

        public function getStartDate() {
            return $this->startDate;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function getAccountId() {
            return $this->accountId;
        }

        protected function getAccountDetails() {
            $str = "<li>Account ID: " . $this->accountId . "</li>" . "<li>Balance: $" . $this->balance . "</li>" . "<li>Account Opened: " . $this->startDate . "</li>";
            
            return $str;
        }
    }

    class CheckingAccount extends Account {
        const OVERDRAW_LIMIT = -200;

        public function withdrawal($amount) {
            if ($this->balance - $amount >= self::OVERDRAW_LIMIT)
            {
                $this->balance -= $amount;
                return true;
            }
            else
            {
                return false;
            }
        }

        //freebie. I am giving you this code.
        public function getAccountDetails() {
            $str = "<h2>Checking Account</h2>";
            $str .= parent::getAccountDetails();
            
            return $str;
        }
    }

    class SavingsAccount extends Account {

        public function withdrawal($amount) {
            if ($this->balance-$amount >= 0)
            {
                $this->balance -= $amount;
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getAccountDetails() {
            $str = "<h2>Savings Account</h2>";
            $str .= parent::getAccountDetails();
            
            return $str;
        }
    }

    
    #$checking = new CheckingAccount ('C123', 1000, '12-20-2019');
    #$checking->withdrawal(200);
    #$checking->deposit(500);

    #$savings = new SavingsAccount('S123', 5000, '03-20-2020');
    
    #echo $checking->getAccountDetails();
    #echo $savings->getAccountDetails();
    #echo $checking->getStartDate();
?>
