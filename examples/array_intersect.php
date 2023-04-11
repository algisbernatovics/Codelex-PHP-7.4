<?php
$arr = [':)', ';)'];
{
    $smiles = [':)', ';)', ':-)', ';-)', ':~)', ';~)', ':D', ';D', ':-D', ';-D', ':~D', ';~D'];
    var_dump(count(array_intersect($arr, $smiles)));
}
