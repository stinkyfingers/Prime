<?php
include 'PrimesClass.php';


testTest();

function testTest(){
    $primes = new PrimesClass();
    $result = $primes->test();
    if ($result['test'] == "testing"){
        echo "testTest passed.";
    }else{
        echo "testTest failed.";
    }
    
    
}

