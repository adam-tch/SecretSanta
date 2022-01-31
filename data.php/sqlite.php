<?php

$sq3 = new SQLite3('database.sq3');

if(!filesize('database.sq3')) {
	$sq3->exec('CREATE TABLE new (col STRING)');
}

$sq3->query('INSERT INTO new VALUES("User 1")');
$sq3->query('INSERT INTO new VALUES("User 2")');
$sq3->query('INSERT INTO new VALUES("User 3")');
$sq3->query('INSERT INTO new VALUES("User 4")');
$sq3->query('INSERT INTO new VALUES("User 5")');
$sq3->query('INSERT INTO new VALUES("User 6")');
$sq3->query('INSERT INTO new VALUES("User 7")');
$sq3->query('INSERT INTO new VALUES("User 8")');
$sq3->query('INSERT INTO new VALUES("User 9")');
$sq3->query('INSERT INTO new VALUES("User 10")');


?>