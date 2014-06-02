<?php
include 'PrimesClass.php';

$primes = new PrimesClass();

$startingPoint = $_POST['startingPoint'];
$quantity = $_POST['quantity'];

$result = $primes->getPrimeArray($startingPoint,$quantity);

echo json_encode($result);