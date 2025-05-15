<?php
[0,0,1,1,1,2,2,3,3,4];
function removeDuplicates(array &$nums): int {
    $n = count($nums);
    if ($n === 0) return 0;

    $j = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($nums[$i] !== $nums[$i - 1]) {
            $nums[$j] = $nums[$i];
            $j++;
        }
    }
    return $j;
}

function removeDuplicatesAlternative(&$nums) {
    $candidate = null;
    $k = 0;
    $lenght = count($nums);

    for($i = 0; $i < $lenght; $i++){
        $el = $nums[$i];

        if($el != $candidate || $i == 0){
            $nums[$k] = $el;

            $candidate = $el;
            $k++;
        }
    }
    
    return $k;
}