<?php declare (strict_types=1);

class Video
{
    protected string $title;
    protected array $rating;
    protected bool $isAvailable;

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->rating[] = 0;
        $this->isAvailable = true;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): int
    {
        $avg = 0;
        $this->rating = array_filter($this->rating);
        if (count($this->rating)) {
            $avg = array_sum($this->rating) / count($this->rating);
        }
        return $avg;
    }

    public function addRating(int $userRating): void
    {
        $this->rating[] = $userRating;
    }

    public function getIsAvailable(): bool
    {

        return $this->isAvailable;
    }

    public function setIsAvailable(): void
    {

        $this->isAvailable = !$this->isAvailable;
    }
}