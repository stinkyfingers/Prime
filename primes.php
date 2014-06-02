<?php
include 'PrimesClass.php';

$primes = new PrimesClass();
$result = $primes->test();

echo json_encode($result);