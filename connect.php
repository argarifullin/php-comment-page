<?php
$hn = 'localhost';
$un = 'root';
$pw = 'root';
$db = 'test';

$connect = mysqli_connect($hn,$un,$pw,$db) or die('connection error');
