<?php
$nums = array();
for ($i = 0; $i < 1000; $i++){
    $nums[$i] = -1;
}
function Fib($num)
{
    global $nums;
    if ($num < 0) {
        echo "Num is out of range :_('_')_:";
    } else if ($num == 0) {
        return 1;
    } else if ($num == 1) {
        return 1;
    } else {
        if ( $nums[$num] != -1 ) {
            return ($nums[$num]);
        } else {
            $nums[$num] = (Fib($num - 2) + Fib($num - 1));
            return $nums[$num];
        }
    }
}

$number = Fib(100);
echo "Number is " . $number;
 ?>