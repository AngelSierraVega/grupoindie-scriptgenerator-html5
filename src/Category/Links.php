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
 * @version     GIG-HTML5.00.01
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Links {

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Links\Hyperlink}
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Links\Hyperlink
     * 
     */
    public static function Hyperlink($link, $content = NULL, $target = NULL) {
        return new Links\Hyperlink($link, $content, $target);
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Links\Anchor}
     *
     * @since       GIG-HTML5.00.01
     * @author      Izmir Sanchez  <izmirreffi@gmail.com>
     *
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Links\Anchor
     *
     */
    public static function Anchor($content = []) {
        return new Links\Anchor($content);
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Links\Anchor}
     *
     * @since       GI-HTML5.00.01
     * @author      Izmir Sanchez  <izmirreffi@gmail.com>
     *
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Links\Link
     *
     */
    public static function Link($href, $rel) {
        return new Links\Link($href, $rel);
    }

}


/**
 * Class Link_test
 * @package GIndie\ScriptGenerator\HTML5
 * @author Izmir Sanchez Juarez
 */
class LinksTest extends \GIndie\Test {
    
    public static function Anchor() {
        $expected = '<a>test</a>';
        $result = Links::Anchor("test");
        static::execStrCmp($expected, $result);
    }

    public static function Hyperlink_test() {
        $expected = "<a href=\"https://www.w3schools.com\" target=\"_blank\">Visit W3Schools.com!</a>";
        $result = Links::Hyperlink("https://www.w3schools.com",
                        "Visit W3Schools.com!", "_blank");
        static::execStrCmp($expected, $result);
    }

    public static function Link_Test() {
        $expected = "<link href=\"theme.css\" rel=\"stylesheet\">";
        $result = Links::Link("theme.css", "stylesheet");
        static::execStrCmp($expected, $result);
    }

}
