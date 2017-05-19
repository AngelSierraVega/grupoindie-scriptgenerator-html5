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
 * Description of StylesSemantics
 * 
 * @version     GIG-HTML5.00.03
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class StylesSemantics {
    
    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\StylesSemantics\Style}
     * 
     * @since       GIG-HTML5.00.02
     * @author      Lili... <correo@correo>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\StylesSemantics\Style
     * 
     */
    public static function Style($content) {
        return new StylesSemantics\Style($content);
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\StylesSemantics\Div}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\StylesSemantics\Div
     * 
     */
    public static function Div($content, array $attributes = array()) {
        return new StylesSemantics\Div($content, $attributes);
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\StylesSemantics\Span}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\StylesSemantics\Span
     * 
     */
    public static function Span($content, array $attributes = array()) {
        return new StylesSemantics\Span($content,$attributes);
    }

}

/**
 * Class StylesSemanticsTest
 * @package GIgenerator\DML\HTML5\Category
 * @author Izmir Sanchez Juarez <izmirreffi@gmail.com>
 */
class StylesSemanticsTest extends \GIndie\Test {

    /**
     * @internal
     * @test
     */
    public static function Style() {
        $expected   = '<style>h1 {color:red;}p {color:blue;}</style>';
        $result     = StylesSemantics::Style("h1 {color:red;}p {color:blue;}");
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Div() {
        $expected   = "<div>My div</div>";
        $result     = StylesSemantics::Div("My div");
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Span() {
        $expected   = "<span>Hello span</span>";
        $result     = StylesSemantics::Span("Hello span");
        static::execStrCmp($expected, $result);
    }


}