<?php

namespace App;
Class Record{
    protected string $name;
    protected int $regCode;
    protected string $sepa;
    protected string $regDate;
    protected ?string $terminated;
    public function __construct(string $name,int $regCode,string $sepa,string $regDate,?string $terminated)
    {
        $this->name = $name;
        $this->regCode = $regCode;
        $this->sepa = $sepa;
        $this->regDate = $regDate;
        $this->terminated = $terminated;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getRegCode(): int
    {
        return $this->regCode;
    }

    public function getSepa(): string
    {
        return $this->sepa;
    }

    public function getRegDate(): string
    {
        return $this->regDate;
    }

    public function getTerminated(): ?string
    {
        return $this->terminated;
    }
}
