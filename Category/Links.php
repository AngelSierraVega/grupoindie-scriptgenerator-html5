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
 * @package GIndie\ScriptGenerator\HTML5\Category\Links
 * @license file://LICENSE MIT License
 * 
 * @version 00.80
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo add <nav>
 * 
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @edit SG-HTML5.00.01 18-01-02
 * - Added unit test from local class LinksTest
 * - Deleted local class LinksTest
 * - Renamed methods for PSR-1 compliance.
 */
class Links
{

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Links\Hyperlink}
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Links\Hyperlink
     * 
     * @ut_params html "https://www.w3schools.com" "Visit W3Schools.com!" "_blank"
     * @ut_str html "<a href="https://www.w3schools.com" target="_blank">Visit W3Schools.com!</a>"
     * @edit SG-HTML5.00.01
     */
    public static function hyperlink($link, $content = null, $target = null)
    {
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
     * @ut_params anchor "test"
     * @ut_str anchor "<a>test</a>"
     * @edit SG-HTML5.00.01
     *
     */
    public static function anchor($content = null)
    {
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
     * @ut_params link "theme.css" "stylesheet"
     * @ut_str link "<link href="theme.css" rel="stylesheet">"
     * @edit SG-HTML5.00.01
     */
    public static function link($href, $rel)
    {
        return new Links\Link($href, $rel);
    }

}
