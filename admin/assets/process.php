<?php  
foreach (range(1, 10) as $step) {
    echo sprintf('%d: %s  ', $step, isset($a) ? 'yes' : 'no');
    if (! isset($a)) {
        $a = 1;
    }
}
?>