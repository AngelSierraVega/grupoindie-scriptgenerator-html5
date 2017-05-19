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
 * Factory Pattern for the <b>Meta</b> of <b>HTML5</b>.
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.02
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Meta {

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Meta\Base}
     *
     * @since       GIG-HTML5.00.02
     * @author      Izmir Sanchez Juarez <izmirreffi@gmail.com>
     *
     * @return      \GIndie\Generator\DML\HTML5\Category\Meta\Base
     *
     */
    public static function Base($href, $target) {
        return new Meta\Base($href, $target);
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Meta\Head}
     *
     * @since       GIG-HTML5.00.02
     * @author      Izmir Sanchez Juarez <izmirreffi@gmail.com>
     *
     * @return      \GIndie\Generator\DML\HTML5\Category\Meta\Head
     *
     */
    public static function Head($charset, $title) {
        return new Meta\Head($charset, $title);
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Meta\Meta}
     *
     * @since       GIG-HTML5.00.02
     * @author      Izmir Sanchez Juarez <izmirreffi@gmail.com>
     *
     * @return      \GIndie\Generator\DML\HTML5\Category\Meta\Meta
     *
     */
    public static function Meta(Array $attributes) {
        return new Meta\Meta($attributes);
    }

}

class MetaTest extends \GIndie\Test {

    

    public static function Base() {
        $expected = "<base href=\"http://www.w3schools.com/images/\" target=\"_blank\">";
        $result = Meta::Base("http://www.w3schools.com/images/", "_blank");
        static::execStrCmp($expected, $result);
    }

    public static function Head() {
        $expected = "<head charset=\"utf-8\"><title>Test</title></head>";
        $result = Meta::Head("utf-8", "Test");
        static::execStrCmp($expected, $result);
    }

    public static function Meta() {
        $expected = "<meta name=\"author\" />";
        $result = Meta::Meta(["name" => "author"]);
        static::execStrCmp($expected, $result);
    }

}
