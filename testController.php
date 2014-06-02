<?php
include 'PrimesClass.php';


testTest();
firstFourPrimes();
firstTenPrimes();
getOneThousandResults();

function testTest(){
    $primes = new PrimesClass();
    $result = $primes->test();
    if ($result['test'] == "testing"){
        echo "testTest passed.<br>";
    }else{
        echo "testTest failed.<br>";
    }
}
function firstFourPrimes(){
    
    $primes = new PrimesClass();
    $result = $primes->getPrimeArray(1,4);
 
    if ($result == array(1,2,3,5)){
        echo "firstFourPrimes passed.<br>";
    }else{
        echo "firstFourPrimes failed.<br>".$result;
    }  
    
}

function firstTenPrimes(){
    
    $primes = new PrimesClass();
    $result = $primes->getPrimeArray(1,10);
 
    if ($result == array(1,2,3,5,7,11,13,17,19,23)){
        echo "firstTenPrimes passed.<br>";
    }else{
        echo "firstTenPrimes failed.<br>".var_dump($result);
    }  
    
}

function getOneThousandResults(){
    $primes = new PrimesClass();
    $result = $primes->getPrimeArray(2,1000);
    if(count($result) == 1000){
        echo "getOneThousandResults passed.<br>";
    }else{
        echo "getOneThousandResults failed.<br>".var_dump($result);
    }  
   
}