<?php declare (strict_types=1);

require_once 'video-store.php';
require_once 'video.php';

$USER_RATING_MIN_VALUE = 1;
$USER_RATING_MAX_VALUE = 10;

class Application
{
    public array $allMovies = [];
    protected object $videoStore;

    protected int $usrRatingMin;
    protected int $usrRatingMax;

    public function __construct($videoStore, $usrRatingMin, $usrRatingMax)
    {
        $this->videoStore = $videoStore;
        $this->allMovies = [];
        $this->usrRatingMin = $usrRatingMin;
        $this->usrRatingMax = $usrRatingMax;

    }

    function run()
    {
        while (true) {
            echo PHP_EOL;
            echo "Choose the operation you want to perform \n";
            echo "Choose [0] for EXIT\n";
            echo "Choose [1] to fill video store\n";
            echo "Choose [2] to rent video (as user)\n";
            echo "Choose [3] to return video (as user)\n";
            echo "Choose [4] to list inventory\n";
            echo PHP_EOL;
            $command = (int)readline('Your Choice (number):');

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    do {
                        $title = readline('Movie Title to Add:');
                        $newMovie = new Video($title);
                        $this->allMovies[] = $newMovie;

                        echo 'Successfully Added!' . PHP_EOL;
                        echo 'Do you want to add more?' . PHP_EOL;
                        $confirmation = readline('Y/N:');

                        echo PHP_EOL;

                    } while ($confirmation == 'Y' || $confirmation == 'y');
                    break;

                case 2:
                    do {
                        $this->videoStore->listInventory($this->allMovies);
                        $videoNumber = (int)readline('Video to rent (number):');

                        if (isset($this->allMovies[$videoNumber]) && $this->allMovies[$videoNumber]->getIsAvailable()) {
                            $this->videoStore->rentVideo($this->allMovies[$videoNumber]);
                            echo 'Successfully Rented!' . PHP_EOL;

                        } elseif
                        (isset($this->allMovies[$videoNumber]) && !$this->allMovies[$videoNumber]->getIsAvailable()) {
                            echo 'This video is Rent now. You can Take it next time.' . PHP_EOL;

                        } else
                            echo 'Please select correct video by number.' . PHP_EOL;
                    } while (!isset($this->allMovies[$videoNumber]));
                    break;

                case 3:
                    do {
                        $this->videoStore->listInventory($this->allMovies);
                        $videoNumber = (int)readline('Video to Return (number):');

                        if (isset($this->allMovies[$videoNumber]) && !$this->allMovies[$videoNumber]->getIsAvailable()) {

                            do {
                                $userRating = (int)(readline('Please Give us Your rating:'));
                                $ratingRange = range($this->usrRatingMin, $this->usrRatingMax);
                            } while (!in_array($userRating, $ratingRange));

                            $this->videoStore->returnVideo($this->allMovies[$videoNumber], $userRating);
                            echo 'Successfully Returned';

                        } elseif
                        (isset($this->allMovies[$videoNumber]) && $this->allMovies[$videoNumber]->getIsAvailable()) {

                            echo 'This video has already been returned.' . PHP_EOL;
                        } else echo 'Please select correct video by number.' . PHP_EOL;

                    } while (!isset($this->allMovies[$videoNumber]));
                    break;

                case 4:
                    $this->videoStore->listInventory($this->allMovies);
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }
}

$videoStore = new videoStore;
$app = new Application($videoStore, $USER_RATING_MAX_VALUE, $USER_RATING_MIN_VALUE);
$app->run();