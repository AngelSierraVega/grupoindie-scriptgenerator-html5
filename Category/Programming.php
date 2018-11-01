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
 * @package GIndie\ScriptGenerator\HTML5\Category\Programming
 * 
 * @version 00.70
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo <embed> <object> <param>
 * 
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 * - Added unit test from class BasicTest
 * - Deleted class BasicTest
 * - Renamed methods for PSR-1 compliance.
 */
class Programming
{

    /**
     * {@see \GIndie\ScriptGenerator\HTML5\Category\Programming\Script}
     *
     * @since GIG-HTML5.00.01
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\Programming\Script
     * 
     * @ut_params script "index.js" "true"
     * @ut_str script "<script src="index.js"></script>"
     * 
     * @edit SG-HTML5.00.01 <angel.sierra@grupoindie>
     */
    public static function script($script, $external = false)
    {
        return new Programming\Script($script, $external);
    }

    /**
     * 
     * @param type $content
     * @return \GIndie\ScriptGenerator\HTML5\Category\Programming\Noscript
     * 
     * @ut_params noscript "Does not support Javascript"
     * @ut_str noscript "<noscript>Does not support Javascript</noscript>"
     * 
     * @edit SG-HTML5.00.01 <angel.sierra@grupoindie>
     */
    public static function noscript($content)
    {
        return new Programming\Noscript($content);
    }

}
