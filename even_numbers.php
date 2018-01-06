    <?
    $massiv = array(1,2,3,4,5,6,7,8,9);
    $sum = 0;
    foreach ($massiv as $int_value) {
        $int_value%2 == 0 ? $sum+=$int_value : $sum+=0;
    }
