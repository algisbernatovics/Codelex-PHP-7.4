<?php include 'functions.php';

## Exercise #8

//Design a SavingsAccount class that stores a savings account’s annual interest rate and balance.
//
//- The class constructor should accept the amount of the savings account’s starting balance.
//- The class should also have methods for:
//    - subtracting the amount of a withdrawal
//- adding the amount of a deposit
//- adding the amount of monthly interest to the balance
//
//The monthly interest rate is the annual interest rate divided by twelve.
//To add the monthly interest to the balance, multiply the monthly interest rate by the balance,
//and add the result to the balance.
//
//Test the class in a program that calculates the balance of a savings account at the end of a period
//of time. It should ask the user for the annual interest rate, the starting balance,
//and the number of months that have passed since the account was established.
//A loop should then iterate once for every month, performing the following:
//
//Ask the user for the amount deposited into the account during the month.
//Use the class method to add this amount to the account balance.
//Ask the user for the amount withdrawn from the account during the month. Use the class method to subtract this amount
//from the account balance.
//Use the class method to calculate the monthly interest.
//After the last iteration, the program should display the ending balance, the total amount of deposits, the total amount
//of withdrawals, and the total interest earned.
//
//Output should be similar to this:
//
//```
//How much money is in the account?: 10000
//Enter the annual interest rate:5
//How long has the account been opened? 4
//Enter amount deposited for month: 1: 100
//Enter amount withdrawn for 1: 1000
//Enter amount deposited for month: 2: 230
//Enter amount withdrawn for 2: 103
//Enter amount deposited for month: 3: 4050
//Enter amount withdrawn for 3: 2334
//Enter amount deposited for month: 4: 3450
//Enter amount withdrawn for 4: 2340
//Total deposited: $7,830.00
//Total withdrawn: $5,777.00
//Interest earned: $29,977.72
//Ending balance: $42,030.72


class BankAccount
{
    protected float $balance;
    protected int $accMonthsOpened;
    protected int $totalDeposited;
    protected int $totalWithdrawn;
    protected float $totalInterestEarned;
    protected int $rate;

    public function __construct($inAccount, $annualInterestRate, $monthsOpened)
    {
        $this->rate = $annualInterestRate;
        $this->balance = $inAccount;
        $this->accMonthsOpened = $monthsOpened;
        $this->totalDeposited = 0;
        $this->totalWithdrawn = 0;
        $this->totalInterestEarned = 0;
    }

    public function monthlyInterestAdd()
    {
        $monthlyRate = ($this->rate / 12);
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
        $this->totalDeposited += $deposit;
        $this->balance += $deposit;
    }

    public function accMonthsOpened()
    {
        $this->accMonthsOpened += 1;
    }

    public function echoAccInfo()
    {
        echo 'Total deposited:$' . number_format($this->totalDeposited, 2) . PHP_EOL;
        echo 'Total withdrawn:$' . number_format($this->totalWithdrawn, 2) . PHP_EOL;
        echo 'Interest earned:$' . number_format($this->totalInterestEarned, 2) . PHP_EOL;
        echo 'Ending balance:$' . number_format($this->balance, 2) . PHP_EOL;
    }
}

class TestBankAccount
{
    public function __construct(object $savingAccount, int $i)
    {
        $savingAccount->deposit(digitsOnly(readline("Enter amount deposited for month:$i:",)));
        $savingAccount->withdrawn(digitsOnly(readline("Enter amount withdrawn for :$i:",)));
        $savingAccount->accMonthsOpened();
        $savingAccount->monthlyInterestAdd();
    }
}

$inAccount = digitsOnly(readline('How much money is in the account?:'));
$annualInterestRate = digitsOnly(readline('Enter the annual interest rate:'));
$monthsOpened = digitsOnly(readline('How long has the account been opened?:'));

$savingAccount = new BankAccount($inAccount, $annualInterestRate, $monthsOpened);
for ($i = 1; $i <= 4; $i++) {
    new TestBankAccount($savingAccount, $i);
}
echo $savingAccount->echoAccInfo();
