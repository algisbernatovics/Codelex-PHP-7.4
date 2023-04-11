<?php
//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6,
// respectively.  Otherwise, it shall print "Not a valid day".
//
//Use:
//
// - a "nested-if" statement

$daynumber = 0;
for ($daynumber; $daynumber <= 7; $daynumber++) {

    if ($daynumber > -1 && $daynumber < 7) {

        $daynumber == 0 ? print 'Sunday' . PHP_EOL : '';
        $daynumber == 1 ? print 'Monday' . PHP_EOL : '';
        $daynumber == 2 ? print 'Tuesday' . PHP_EOL : '';
        $daynumber == 3 ? print 'Wednesday' . PHP_EOL : '';
        $daynumber == 4 ? print 'Thursday' . PHP_EOL : '';
        $daynumber == 5 ? print 'Friday' . PHP_EOL : '';
        $daynumber == 6 ? print 'Saturday' . PHP_EOL : '';

    } else {
        echo 'Invalid day' . PHP_EOL;
    }
}