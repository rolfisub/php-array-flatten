<?php

namespace Rolfisub\ArrayFlatten;

/**
 * Class ArrayFlatten
 * @package Rolfisub\ArrayFlatten
 * @author Rolf Bansbach rolfisub@gmail.com
 */
class ArrayFlatten
{
    /**
     * @param array $a
     * @return array
     */
    public static function flatten(array $a)
    {
        $r = [];
        foreach ($a as $key => $value) {
            if (!is_array($value)) {
                $r[$key] = $value;
            } else {
                $r = array_merge($r, ArrayFlatten::flatten($value));
            }
        }
        return $r;
    }
}