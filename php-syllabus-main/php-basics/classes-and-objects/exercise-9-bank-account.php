<?php include 'functions.php';

//## Exercise #9
//Finish [bank-account.php](./exercise-9-bank-account.php)
//Add the following method:
//function show_user_name_and_balance() { }
//Your method should return a string that contains the account's name and balance
//separated by a comma and space. For example, if an account object named `ben`
//has the name "Benson" and a balance of 17.25, the call of `ben.show_user_name_and_balance()` should return:
//Benson, $17.25
//There are some special cases you should handle. If the balance is negative,
//put the - sign before the dollar sign. Also, always display the cents as a two-digit number.
//For example, if the same object had a balance of -17.5, your method should return:
//Benson, $17.50


class BankAccount
{
    protected float $balance;
    protected int $accMonthsOpened;
    protected int $totalDeposited;
    protected int $totalWithdrawn;
    protected int $totalInterestEarned;
    protected int $rate;

    protected string $userName;

    public function __construct($inAccount, $annualInterestRate, $monthsOpened, $userName)
    {
        $this->rate = $annualInterestRate;
        $this->balance = $inAccount;
        $this->accMonthsOpened = $monthsOpened;
        $this->totalDeposited = 0;
        $this->totalWithdrawn = 0;
        $this->totalInterestEarned = 0;
        $this->userName = $userName;
    }

    public function monthlyInterestAdd()
    {
        $monthlyRate = $this->rate / 12;
        $this->totalInterestEarned += $this->balance * $monthlyRate;
        $this->balance = $this->balance + $this->balance * $monthlyRate;
    }

    public function withdrawn($withdrawn)
    {
        $this->totalWithdrawn -= $withdrawn;
        $this->balance -= $withdrawn;
    }

    public function deposit($deposit)
    {
        var_dump($deposit);
        $this->totalDeposited += intval($deposit);
        $this->balance += intval($deposit);
    }

    public function accMonthsOpened()
    {
        $this->accMonthsOpened += 1;
    }

    public function showUserNameAndBalance()
    {
        if ($this->balance < 0) {
            echo $this->userName . ',-$' . abs(number_format($this->balance, 2)) . PHP_EOL;
        } else {
            echo $this->userName . ',$' . number_format($this->balance, 2) . PHP_EOL;
        }
        echo 'Total deposited:$' . $this->totalDeposited . PHP_EOL;
        echo 'Total withdrawn:$' . $this->totalWithdrawn . PHP_EOL;
        echo 'Interest earned:$' . $this->totalInterestEarned . PHP_EOL;
        echo 'Ending balance:$' . $this->balance . PHP_EOL;
    }
}

$benAcc = new BankAccount(-17.50, 5, 4, 'Benson');

$benAcc->showUserNameAndBalance();

