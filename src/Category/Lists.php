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
 */
class Lists {

    /**
     * {@see \GIndie\Generator\DML\HTML5\Lists\ListItem}
     * 
     * @param   array $attributes
     * @param   array $content
     *
     * @since       GIG-HTML5.00.03
     * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Lists\ListItem
     * 
     */
    public static function ListItem(array $attributes = array(),
            array $content = array()) {
        return new Lists\ListItem($attributes, $content);
    }

    /**
     * {@see \GIndie\Generator\DML\HTML5\Lists\Ordered}
     * 
     * @param       array $elements
     *
     * @since       GIG-HTML5.00.02
     * @version     GIG-HTML5.00.03
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Lists\Ordered
     * 
     */
    public static function Ordered(array $elements) {
        return new Lists\Ordered($elements);
    }

    /**
     * {@see \GIndie\Generator\DML\HTML5\Lists\Unordered}
     * 
     * @param       array $elements
     *
     * @since       GIG-HTML5.00.02
     * @version     GIG-HTML5.00.03
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Lists\Unordered
     * 
     */
    public static function Unordered(array $elements) {
        return new Lists\Unordered($elements);
    }

}

/**
 * @author Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
class Lists_test extends \GIndie\Test {

    /**
     * @test
     * @internal 
     */
    public static function ListItem() {
        $expected = "<li>Coffee</li>";
        $result = Lists::ListItem([], ["Coffee"]);
        static::execStrCmp($expected, $result);
    }

    /**
     * @test
     * @internal 
     */
    public static function Ordered() {
        $expected = "<ol><li>Coffee</li></ol>";
        $result = Lists::Ordered(["Coffee"]);
        static::execStrCmp($expected, $result);
    }

    /**
     * @test
     * @internal 
     */
    public static function Unordered() {
        $expected = "<ul><li>Coffee</li></ul>";
        $result = Lists::Unordered(["Coffee"]);
        static::execStrCmp($expected, $result);
    }

}
