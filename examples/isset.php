<?php
$testvar = 'report Variable';
var_dump(isset($testvar));
var_dump($testvar);

unset($testvar);

var_dump($testvar);
var_dump(isset($testvar));

