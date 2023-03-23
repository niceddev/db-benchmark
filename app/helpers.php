<?php

if (!function_exists('combine_arr')) {
    function combine_arr($a, $b): array
    {
        $aCount = count($a);
        $bCount = count($b);

        $size = ($aCount > $bCount) ? $bCount : $aCount;
        $a = array_slice($a, 0, $size);
        $b = array_slice($b, 0, $size);

        return array_combine($a, $b);
    }
}
