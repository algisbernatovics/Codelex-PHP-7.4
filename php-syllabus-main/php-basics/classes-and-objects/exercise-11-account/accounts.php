<?php declare (strict_types=1);

class Account
{
    protected string $accName;
    protected float $balance;

    public function __construct(string $accName, float $balance)
    {
        $this->accName = $accName;
        $this->balance = $balance;
    }

    public function showAccUserAndBalance(): void
    {
        echo 'Account name: ' . $this->getAccName() . ' ' . PHP_EOL;
        echo 'Account balance: ' . $this->getBalance() . ' ';
        echo PHP_EOL;
    }

    public function getAccName(): string
    {
        return $this->accName;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function doTransfer(object $to, float $howMuch)
    {
        if ($this->balance >= $howMuch) {
            $this->withdrawal($howMuch);
            $to->deposit($howMuch);
            echo 'Transfer Successful!.' . PHP_EOL;
            echo PHP_EOL;
        } else echo 'Not Enought Money' . PHP_EOL;
    }

    public function withdrawal(float $howMuch): void
    {
        $this->balance -= $howMuch;
    }

    public function deposit(float $howMuch): void
    {
        $this->balance += $howMuch;
    }
}

