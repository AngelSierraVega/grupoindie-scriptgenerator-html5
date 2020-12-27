<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category;

/**
 * Description of StylesSemantics
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\StylesSemantics
 * @license file://LICENSE
 * 
 * @version 00.4A
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo <header> <main> <section> <article> <aside> <details> <dialog> <summary>
 * @todo <data>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 * - Added unit test from class BasicTest
 * - Deleted class BasicTest
 * - Renamed methods for PSR-1 compliance.
 * @edit SG-HTML5.00.02 18-02-14
 * - No required attribute on div()
 */
class StylesSemantics
{

    /**
     * {@see \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div}
     *
     * @since GIG-HTML5.00.01
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
     * 
     * @ut_params div "My div"
     * @ut_str div "<div>My div</div>"
     * 
     * @edit SG-HTML5.00.02
     */
    public static function div($content = null, array $attributes = array())
    {
        return new StylesSemantics\Div($content, $attributes);
    }

    /**
     * 
     * @param type $content
     * @param type $classnames
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Footer
     * 
     * @ut_params footer "This is a footer"
     * @ut_str footer "<footer>This is a footer</footer>"
     * 
     * @edit SG-HTML5.00.01
     */
    public static function footer($content, $classnames = null)
    {
        return new StylesSemantics\Footer($content, $classnames);
    }

    /**
     * {@see \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Span}
     *
     * @since GIG-HTML5.00.01
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Span
     * 
     * @ut_params span "Hello span"
     * @ut_str span "<span>Hello span</span>"
     * 
     * @edit SG-HTML5.00.01
     */
    public static function span($content = \NULL, array $attributes = array())
    {
        return new StylesSemantics\Span($content, $attributes);
    }

    /**
     * {@see \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Style}
     * 
     * @since GIG-HTML5.00.02
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Style
     * 
     * @ut_params style "h1 {color:red;}p {color:blue;}"
     * @ut_str style "<style>h1 {color:red;}p {color:blue;}</style>"
     * 
     * @edit SG-HTML5.00.01 <angel.sierra@grupoindie>
     */
    public static function style($content)
    {
        return new StylesSemantics\Style($content);
    }

}
