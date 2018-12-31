<?php
require_once "./src/ArrayFlatten.php";

use PHPUnit\Framework\TestCase;

/**
 * Class ArrayFlattenTest
 * @author Rolf Bansbach rolfisub@gmail.com
 */
class ArrayFlattenTest extends TestCase
{

    /**
     * Just check if the ArrayFlatten has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError()
    {
        $var = new \Rolfisub\ArrayFlatten\ArrayFlatten();
        $this->assertTrue(is_object($var));
        unset($var);
    }

}
