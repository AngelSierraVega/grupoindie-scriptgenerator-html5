<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category;

//require_once __DIR__ . '/Programming/Script.php';

/**
 * Factory Pattern for the <b>programming tags</b> of <b>HTML</b>.
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.00.02
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Programming {

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Programming\Script}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Programming\Script
     * 
     */
    public static function Script($script, $external = false) {
        return new Programming\Script($script, $external);
    }


    public static function Noscript($content) {
        return new Programming\Noscript($content);
    }
}

/**
 * Class ProgrammingTest
 *
 * @package     GIgenerator\DML\HTML5\Category\Programming
 * @author      Izmir Sanchez Juarez <izmirreffi@gmail.com>
 * @since       2017-04-18
 */
class ProgrammingTest extends \GIndie\Test {

    /**
     * @iternal
     * @test
     */
    public static function Script()
    {
        $expected   = "<script src=\"index.js\"></script>";
        $result     = Programming::Script("index.js", true);
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Noscript()
    {
        $expected   = "<noscript>Does not support Javascript</noscript>";
        $result     = Programming::Noscript("Does not support Javascript");
        static::execStrCmp($expected, $result);
    }

}
