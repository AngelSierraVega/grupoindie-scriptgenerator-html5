<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category;

/*
require_once __DIR__ . '/Links/Link.php';
require_once __DIR__ . '/Links/Anchor.php';
require_once __DIR__ . '/Links/Hyperlink.php';
*/

/**
 * Factory Pattern for the <b>links</b> of <b>HTML5</b>.
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.01
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Links {

    /**
     * {@see \GIgenerator\DML\HTML5\Links\Hyperlink}
     *
     * @version     GI-HTML5.01.02
     * @since       2017-01-18
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Links\Hyperlink
     * 
     */
    public static function Hyperlink($link, $content = NULL, $target = NULL) {
        return new Links\Hyperlink($link, $content, $target);
    }


    /**
     * {@see \GIgenerator\DML\HTML5\Links\Anchor}
     *
     * @version     GI-HTML5.00.00
     * @since       2017-05-17
     * @author      Izmir Sanchez  <izmirreffi@gmail.com>
     *
     * @return      \GIndie\Generator\DML\HTML5\Links\Anchor
     *
     */
    public static function Anchor($content = []){
        return new Links\Anchor($content);
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Links\Anchor}
     *
     * @version     GI-HTML5.00.00
     * @since       2017-05-17
     * @author      Izmir Sanchez  <izmirreffi@gmail.com>
     *
     * @return      \GIndie\Generator\DML\HTML5\Links\Link
     *
     */
    public static function Link($href, $rel){
        return new Links\Link($href, $rel);
    }

}

//namespace GIndie\Generator\DML\HTML5\Category;


/**
 * Class Link_test
 * @package GIndie\Generator\DML\HTML5
 * @author Izmir Sanchez Juarez
 */
class Links_test {

    function __construct() {
        echo self::Hyperlink_test() . "\n";
        echo self::Anchor_test() . "\n";
        echo self::Link_test() . "\n";
    }

     static function cmp($expected,$result){
        return \get_called_class() . "::" . debug_backtrace()[1]['function'] . " result: ". strcmp($expected, $result);
    }


    public static function Hyperlink_test()
    {
        $expected = "<a href='https://www.w3schools.com' target='_blank'>Visit W3Schools.com!</a>";

        $result = Links::Hyperlink("https://www.w3schools.com", "Visit W3Schools.com!", "_blank");
        return static::cmp($expected,$result);
    }

    public static function Anchor_test()
    {
        $expected = '<a>Anchor test</a>';
        $result = Links::Anchor("Anchor test");

        return static::cmp($expected, $result);
    }

    public static function Link_Test()
    {
        $expected = "<link href='theme.css' rel='stylesheet'>";
        $result = Links::Link("theme.css", "stylesheet");
        return static::cmp($expected, $result);
    }

}






























