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
 * Factory Pattern for the <b>Lists</b> of <b>HTML5</b>.
 * 
 * Partial: Not <menu> or <menuitem>
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.00.03
 * @since       2017-01-04
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @edit SG-HTML5.00.01 18-01-18
 * 
 */
class Lists
{
    
    /**
     * {@see \GIndie\ScriptGenerator\HTML5\Lists\ListItem}
     * 
     * @param array $attributes
     * @param array $content
     *
     * @since GIG-HTML5.00.03
     * @author Liliana Hernández Castañeda <liliana.hercast@gmail.com>
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Lists\ListItem
     * @ut_params listItem [] ["Coffee"] 
     * @ut_str listItem "<li>Coffee</li>"
     * @edit SG-HTML5.00.01
     * - Added unit test from class BasicTest
     * - Deleted class BasicTest
     * - Renamed methods for PSR-1 compliance.
     */
    public static function listItem(array $attributes = [], array $content = [])
    {
        return new Lists\ListItem($attributes, $content);
    }
    
    /**
     * {@see \GIndie\ScriptGenerator\HTML5\Lists\Ordered}
     * 
     * @param array $elements
     *
     * @since GIG-HTML5.00.02
     * @version GIG-HTML5.00.03
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Lists\Ordered
     * 
     * @ut_params ordered ["Coffee"]
     * @ut_str ordered "<ol><li>Coffee</li></ol>"
     * 
     * @edit SG-HTML5.00.01
     * - Added unit test from class BasicTest
     * - Deleted class BasicTest
     * - Renamed methods for PSR-1 compliance.
     */
    public static function ordered(array $elements)
    {
        return new Lists\Ordered($elements);
    }
    
    /**
     * {@see \GIndie\ScriptGenerator\HTML5\Lists\Unordered}
     * 
     * @param array $elements
     *
     * @since GIG-HTML5.00.02
     * @version GIG-HTML5.00.03
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Lists\Unordered
     * 
     * @ut_params unordered ["Coffee"]
     * @ut_str unordered "<ul><li>Coffee</li></ul>"
     * 
     * @edit SG-HTML5.00.01
     * - Added unit test from class BasicTest
     * - Deleted class BasicTest
     * - Renamed methods for PSR-1 compliance.
     */
    public static function unordered(array $elements)
    {
        return new Lists\Unordered($elements);
    }

}
