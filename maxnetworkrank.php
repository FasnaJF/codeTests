<?php
/*
An infrastructure consisting of n cities from l to n, and m bidirectional roads between them are given. Roads do not intersect apart from at their start and endpoints (they can pass through underground tunnels to avoid collisions).

For each pair of cities directly connected by a road, let’s define their network rank as the total number of roads that are connected to either of the two cities.

Write a function, given two arrays starts, ends consisting of m integers each and an integer n, where starts[i] and ends[i] are cities at the two ends of the i-th road, returns the maximal network rank in the whole infrastructure.

Example:

Input:
starts = [1, 2, 3, 3]
ends = [2, 3, 1, 4]
n = 4

Output: 4

*/

function solution($A, $B, $N) {
    // write your code in PHP7.0

    $M = count($A);
    $maximalNetworkRank = 0;
    $rank = array_fill(0,$N,0);

    for($i=0;$i<$M; $i++){

        $rank[$A[$i]-1] = ($rank[$A[$i]-1]? $rank[$A[$i]-1]:0)+1;
        $rank[$B[$i]-1] = ($rank[$B[$i]-1]? $rank[$B[$i]-1]:0)+1;
    }

    for($j=0; $j<$M; $j++){
        $ans = $rank[$A[$j]-1]+ $rank[$B[$j]-1] -1 ;
        if($ans > $maximalNetworkRank){
            $maximalNetworkRank = $ans;
        }
    }

    return $maximalNetworkRank;
}


?>
