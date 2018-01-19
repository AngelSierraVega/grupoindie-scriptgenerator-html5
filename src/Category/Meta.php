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
 * Factory Pattern for the <b>Meta</b> of <b>HTML5</b>.
 * 
 * @link https://www.w3schools.com/tags/ref_byfunc.asp
 * 
 * @package HTML5
 * @subpackage Main
 * @category API
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version GIG-HTML5.02
 * @since 17-04-12
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 * - Added unit test from class BasicTest
 * - Deleted class BasicTest
 * - Renamed methods for PSR-1 compliance.
 */
class Meta
{

    /**
     * {@see \GIndie\ScriptGenerator\HTML5\Category\Meta\Base}
     *
     * @since GIG-HTML5.00.02
     * @author Izmir Sanchez Juarez <izmirreffi@gmail.com>
     *
     * @return \GIndie\ScriptGenerator\HTML5\Category\Meta\Base
     * 
     * @ut_params base "http://www.w3schools.com/images/" "_blank"
     * @ut_str base "<base href="http://www.w3schools.com/images/" target="_blank">"
     * 
     * @edit SG-HTML5.00.01 <angel.sierra@grupoindie>
     */
    public static function base($href, $target)
    {
        return new Meta\Base($href, $target);
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Meta\Head}
     *
     * @since       GIG-HTML5.00.02
     * @author      Izmir Sanchez Juarez <izmirreffi@gmail.com>
     *
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Meta\Head
     * 
     * @ut_params head "utf-8" "Test"
     * @ut_str head "<head charset="utf-8"><title>Test</title></head>"
     * 
     * @edit SG-HTML5.00.01 <angel.sierra@grupoindie>
     */
    public static function head($charset, $title)
    {
        return new Meta\Head($charset, $title);
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Meta\Meta}
     *
     * @since       GIG-HTML5.00.02
     * @author      Izmir Sanchez Juarez <izmirreffi@gmail.com>
     *
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Meta\Meta
     *
     * @ut_params meta ["name" => "autor"]
     * @ut_str meta "<meta name="autor" />"
     * 
     * @edit SG-HTML5.00.01 
     */
    public static function meta(Array $attributes)
    {
        return new Meta\Meta($attributes);
    }

}
