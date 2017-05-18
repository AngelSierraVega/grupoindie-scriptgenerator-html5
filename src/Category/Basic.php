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
 * Factory Pattern for the <b>basic tags</b> of <b>HTML5</b>.
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
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Basic {

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Basic\Body}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\Basic\Body
     * 
     */
    public static function Body() {
        return new Basic\Body();
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Basic\BreakLine}
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\Basic\BreakLine
     * 
     */
    public static function BreakLine() {
        return new Basic\BreakLine();
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Basic\Comment}
     * 
     * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Comment
     * 
     */
    public static function Comment($comment) {
        return new Basic\Comment($comment);
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Basic\Doctype}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\generator\DML\HTML5\Category\Basic\Doctype
     * 
     */
    public static function Doctype($doctype) {
        return new Basic\Doctype($doctype);
    }

    /**
     * {@see        \GIgenerator\DML\HTML5\Basic\HTML}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\Basic\HTML
     * 
     */
    public static function HTML($title, $lang, $charset) {
        return new Basic\HTML($title, $lang, $charset);
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Basic\Header}
     * 
     * @param       int $level  [1-6] the header level
     * @param       mixed $content  The content of the header
     * @param       NULL|string $classnames  The space separated class names.
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\Basic\Header
     * 
     */
    public static function Header($level, $content) {
        return new Basic\Header($level, $content);
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Basic\Hr}
     * 
     * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\Basic\Hr
     * 
     */
    public static function Hr() {
        return new Basic\Hr();
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Basic\Paragraph}
     * 
     * @param       mixed $content  The content of the paragraph
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category\Basic\Paragraph
     * 
     */
    public static function Paragraph($content) {
        return new Basic\Paragraph($content);
    }

    /**
     * {@see        \GIndie\Generator\DML\HTML5\Category\Basic\Title}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\Generator\DML\HTML5\Category'\Basic\Title
     * 
     */
    public static function Title($title) {
        return new Basic\Title($title);
    }

}

/**
 * Class Basic_test
 *
 * @package GIndie\Generator\DML\HTML5\Category
 * @author Izmir Sanchez Juarez <izmirreffi@gmail.com>
 */
class BasicTest extends \GIndie\Test{


    /**
     * @internal
     * @test
     */
    public static function Body()
    {
        $expected   = '<body></body>';
        $result     = Basic::Body();
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Breakline()
    {
        $expected   = '<br />';
        $resutl     = Basic::BreakLine();
        static::execStrCmp($expected, $resutl);
    }

    /**
     * @internal
     * @test
     */
    public static function Comment()
    {
        $expected   = "<!--This is a comment-->";
        $result     = Basic::Comment("This is a comment");
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Doctype()
    {
        $expected   = "<!DOCTYPE html>";
        $result     = Basic::Doctype("html");
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function HTML()
    {
        $expected   = "<html lang=\"spanish\"><head charset=\"utf-8\"><title>Test</title></head><body></body></html>";
        $result     = Basic::HTML("Test", "spanish", "utf-8");
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Header()
    {
        $expected   = "<h1>Hello World!</h1>";
        $result     = Basic::Header(1, "Hello World!");
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Hr()
    {
        $expected   = "<hr />";
        $result     = Basic::Hr();
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Paragraph()
    {
        $expected   = "<p>Content</p>";
        $result     = Basic::Paragraph("Content");
        static::execStrCmp($expected, $result);
    }

    /**
     * @internal
     * @test
     */
    public static function Title()
    {
        $expected   = "<title>My title</title>";
        $result     = Basic::Title("My title");
        static::execStrCmp($expected, $result);
    }



}