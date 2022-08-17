/*
Given a string S of length N consisting of "?" and lowercase letters, the task is to replace "?" with lowercase letters such that no adjacent characters are the same. If more than one possible combination exists, print any one of them.*/


function solution($riddle) {

    $strArray = str_split($riddle);
    $n = count($strArray);

    if($strArray[0] == "?"){
        $strArray[0] = 'a';
        if($strArray[0] == $strArray[1]){
            $strArray[0] = chr(ord($strArray[0]) + 1);;
        }
    }

    for($i=1; $i < $n-1; $i++){
        if($strArray[$i] == "?"){
            $strArray[$i]= 'a';
        }
        
        if($strArray[$i] == $strArray[$i-1]){
            $strArray[$i] = chr(ord($strArray[$i]) + 1);
        }

        if($strArray[$i] == $strArray[$i+1]){
            $strArray[$i] = chr(ord($strArray[$i]) + 1);
        }

         if($strArray[$i] == $strArray[$i-1]){
            $strArray[$i] = chr(ord($strArray[$i]) + 1);
        }
    }
   
    if($strArray[$n-1] == "?"){
        $strArray[$n-1] = 'a';
        if($strArray[$n-1] == $strArray[$n-2]){
            $strArray[$n-1] = chr(ord($strArray[$i]) + 1);
        }
    }
    
    return join("",$strArray);
}
