<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5;

require_once __DIR__ . '/Basic/Comment.php';
require_once __DIR__ . '/Basic/BreakLine.php';
require_once __DIR__ . '/Basic/Title.php';
require_once __DIR__ . '/Basic/Body.php';
require_once __DIR__ . '/Basic/Doctype.php';
require_once __DIR__ . '/Basic/HTML.php';
require_once __DIR__ . '/Basic/Header.php';
require_once __DIR__ . '/Basic/Hr.php';
require_once __DIR__ . '/Basic/Paragraph.php';

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
 * @version     GI-HTML5.01
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Basic {

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\Body}
     *
     * @version     GI-HTML5.01.01
     * @since       2017-04-12
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Body
     * 
     */
    public static function Body() {
        return new Basic\Body();
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\BreakLine}
     *
     * @version     GI-HTML5.01.02
     * @since       2017-01-18
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\BreakLine
     * 
     */
    public static function BreakLine() {
        return new Basic\BreakLine();
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\Comment}
     * 
     * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
     *
     * @version     GI-DML.01.01
     * @since       2017-04-12
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Comment
     * 
     */
    public static function Comment($comment) {
        return new Basic\Comment($comment);
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\Doctype}
     *
     * @version     GI-HTML5.01.01
     * @since       2017-04-12
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return \GIgenerator\DML\HTML5\Basic\Doctype
     * 
     */
    public static function Doctype($doctype) {
        return new Basic\Doctype($doctype);
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\HTML}
     *
     * @version     GI-HTML5.01.01
     * @since       2017-04-12
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return \GIgenerator\DML\HTML5\Basic\HTML
     * 
     */
    public static function HTML($title, $lang, $charset) {
        return new Basic\HTML($title, $lang, $charset);
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\Header}
     * 
     * @param       int $level  [1-6] the header level
     * @param       mixed $content  The content of the header
     * @param       NULL|string $classnames  The space separated class names.
     *
     * @version     GI-HTML5.01.02
     * @since       2017-01-18
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Header
     * 
     */
    public static function Header($level, $content, $classnames = NULL) {
        return new Basic\Header($level, $content, $classnames);
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\Hr}
     * 
     * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
     *
     * @version     GI-DML.01.02
     * @since       2017-04-12
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Hr
     * 
     */
    public static function Hr() {
        return new Basic\Hr();
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\Paragraph}
     * 
     * @param       mixed $content  The content of the paragraph
     *
     * @version     GI-HTML5.01.02
     * @since       2017-01-18
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Paragraph
     * 
     */
    public static function Paragraph($content, $classnames = NULL) {
        return new Basic\Paragraph($content, $classnames);
    }

    /**
     * {@see \GIgenerator\DML\HTML5\Basic\Title}
     *
     * @version     GI-HTML5.01.01
     * @since       2017-04-12
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\Basic\Title
     * 
     */
    public static function Title($title) {
        return new Basic\Title($title);
    }

}
