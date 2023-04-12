<?php declare (strict_types=1);

class VideoStore
{
    public function listInventory(array $movies)
    {
        foreach ($movies as $key => $movie) {
            echo "[$key]" . ' | '
                . 'Rating:' . $movie->getRating() . ' | '
                . 'Available:' . ($movie->getIsAvailable() ? 'Yes' : 'No') . ' | '
                . 'Title:' . $movie->getTitle() . PHP_EOL;
        }
    }

    public function rentVideo(object $videoToRent)
    {
        $videoToRent->setIsAvailable();
    }

    public function returnVideo(object $videoToReturn, int $userRating)
    {
        $videoToReturn->setIsAvailable();
        $videoToReturn->addRating($userRating);

    }
}