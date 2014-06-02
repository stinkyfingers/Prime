<?php
class PrimesClass{
    public function test(){
        $result = array('test'=>'testing');
        return $result;
        
    }
    
    public function getPrimeArray($startingNumber, $quantity){
        $result = array();
        $primeTest = true;
        
        while(count($result) < $quantity){
            //prime test logic
            for($i=2;$i<$startingNumber;$i++){
                if($startingNumber%$i==0){
                    $primeTest=false;
                }
            }
            
            //prime? append to array
            if($primeTest){
                array_push($result,$startingNumber);
            }
            $startingNumber++;
            $primeTest = true;
        }

        return $result;
 
    }

    
    
    
    
}

