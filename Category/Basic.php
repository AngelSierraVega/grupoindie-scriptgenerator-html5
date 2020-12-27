<?php

/**
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Basic
 * @license file://LICENSE
 *
 * @version 00.D0
 */

namespace GIndie\ScriptGenerator\HTML5\Category;

/**
 * Factory Pattern for the <b>basic tags</b> of <b>HTML5</b>.
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * 
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo <head>
 * 
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @edit SG-HTML5.00.01 18-01-02
 * - Added unit test from class BasicTest
 * - Deleted class BasicTest
 * - Renamed methods for PSR-1 compliance.
 */
class Basic
{

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Basic\Body}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\Body
     * 
     * @ut_str body "<body></body>"
     * @edit SG-HTML5.00.01
     */
    public static function body()
    {
        return new Basic\Body();
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Basic\BreakLine}
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\BreakLine
     * 
     * @ut_str breakLine "<br />"
     * @edit SG-HTML5.00.01
     */
    public static function breakLine()
    {
        return new Basic\BreakLine();
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Basic\Comment}
     * 
     * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Comment
     * 
     * @ut_params comment "This is a comment"
     * @ut_str comment "<!--This is a comment-->"
     * @edit SG-HTML5.00.01
     */
    public static function comment($comment)
    {
        return new Basic\Comment($comment);
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Basic\Doctype}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\Doctype
     * 
     * @ut_params doctype "html"
     * @ut_str doctype "<!DOCTYPE html>"
     * @edit SG-HTML5.00.01
     */
    public static function doctype($doctype)
    {
        return new Basic\Doctype($doctype);
    }

    /**
     * {@see        \GIgenerator\DML\HTML5\Basic\HTML}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\HTML
     * 
     * @ut_params html "Test" "spanish" "utf-8"
     * @ut_str html "<html lang="spanish"><head charset="utf-8"><title>Test</title></head><body></body></html>"
     * @edit SG-HTML5.00.01
     */
    public static function html($title, $lang, $charset)
    {
        return new Basic\HTML($title, $lang, $charset);
    }
    
    /**
     * Contains metadata/information for the document
     * 
     * @since 20-12-26
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\Basic\Head
     * 
     * @ut_str head "<head charset="UTF-8"><title>title</title></head>"
     */
    public static function head()
    {
        return new Basic\Head("UTF-8","title");
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Basic\Header}
     * 
     * @param       int $level  [1-6] the header level
     * @param       mixed $content  The content of the header
     * @param       NULL|string $classnames  The space separated class names.
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\Header
     * 
     * @ut_params header "1" "Hello World!"
     * @ut_str header "<h1>Hello World!</h1>"
     * @edit SG-HTML5.00.01
     */
    public static function header($level, $content)
    {
        return new Basic\Header($level, $content);
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Basic\Hr}
     * 
     * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\Hr
     * 
     * @ut_str hr "<hr />"
     * @edit SG-HTML5.00.01
     */
    public static function hr()
    {
        return new Basic\Hr();
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Basic\Paragraph}
     * 
     * @param       mixed $content  The content of the paragraph
     *
     * @since       GIG-HTML5.00.02
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category\Basic\Paragraph
     * 
     * @ut_params paragraph "Content"
     * @ut_str paragraph "<p>Content</p>"
     * @edit SG-HTML5.00.01
     */
    public static function paragraph($content)
    {
        return new Basic\Paragraph($content);
    }

    /**
     * {@see        \GIndie\ScriptGenerator\HTML5\Category\Basic\Title}
     *
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIndie\ScriptGenerator\HTML5\Category'\Basic\Title
     * 
     * @edit SG-HTML5.00.01
     * 
     * @ut_params title "Mytitle"
     * @ut_str title "<title>Mytitle</title>"
     * 
     */
    public static function title($title)
    {
        return new Basic\Title($title);
    }

}
