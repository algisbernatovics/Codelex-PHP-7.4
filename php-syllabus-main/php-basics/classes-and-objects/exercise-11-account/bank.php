<?php declare (strict_types=1);

require_once 'accounts.php';

class Bank
{
    protected object $myAccount;
    protected object $mattAccount;
    protected object $aAccount;
    protected object $bAccount;
    protected object $cAccount;
    protected array $allAccounts;

    public function __construct()
    {
        $allAccounts =
            [
                $myAccount = new Account("My Account", 100.00),
                $mattAccount = new Account("Matt Account", 0.00),
                $aAccount = new Account("A-Account", 0.00),
                $bAccount = new Account("B-Account", 800),
                $cAccount = new Account("C-Account", 1000.00)
            ];

        $this->myAccount = $myAccount;
        $this->mattAccount = $mattAccount;
        $this->aAccount = $aAccount;
        $this->bAccount = $bAccount;
        $this->cAccount = $cAccount;
        $this->allAccounts = $allAccounts;

        $this->transfer();
    }

    public function transfer(): void
    {
        $this->showAllAccounts();

        $transferFrom = (int)readline('Transfer From Account (number):');
        $transferTo = (int)readline('Transfer To Account (number):');
        $howMuch = (int)readline('How Much?:');

        $this->allAccounts[$transferFrom]->doTransfer($this->allAccounts[$transferTo], $howMuch);

        echo $this->allAccounts[$transferFrom]->showAccUserAndBalance() . PHP_EOL;
        echo $this->allAccounts[$transferTo]->showAccUserAndBalance();
    }

    public function showAllAccounts(): void
    {
        echo 'All Accounts Initial State:' . PHP_EOL;

        foreach ($this->allAccounts as $key => $account) {
            echo '[' . $key . ']' . 'Account Name:' .

                $account->getAccName() . ' ' . 'Balance:' .
                $account->getBalance() . PHP_EOL;

        }
        echo PHP_EOL;
    }
}

$bank = new Bank();

