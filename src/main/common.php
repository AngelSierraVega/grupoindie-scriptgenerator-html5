<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie;

/**
 * Represents a Unit-Test
 * 
 * @version GI.00.02
 * @since   2017-05-18
 * 
 * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Test {

    /**
     * @final
     * @since GI.00.01
     */
    final private function __construct() {
        $ignoreFunctions = \get_class_methods(__CLASS__);
        $testFunctions = \get_class_methods(\get_called_class());
        foreach ($testFunctions as $function) {
            \in_array($function, $ignoreFunctions) ?: static::{$function}();
        }
    }

    /**
     * 
     * Execute a string comparing test.
     * @static
     * 
     * @param string $expected The expected output.
     * @param string $result The code that generates the expected output.
     * 
     * @since GI.00.01
     * @version GI.00.01
     */
    public static function execStrCmp($expected, $result) {
        echo \get_called_class() . "::" .
        debug_backtrace()[1]['function'] .
        " -- " .
        ( ( strcmp($expected, $result) === 0 ) ? "Passed" :
                "Error: '" . htmlentities($expected) .
                "' doesn't match '" . htmlentities($result) . "'" )
        . "<br>\n";
    }

    /**
     * Runs the user defined functions. Implementation of a singleton pattern 
     *      for Test class.
     * @static
     * 
     * @since GI.00.01
     */
    public static function run() {
        new static();
    }

}
