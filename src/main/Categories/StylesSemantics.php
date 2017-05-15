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

require_once __DIR__ . '/StylesSemantics/Span.php';
require_once __DIR__ . '/StylesSemantics/Div.php';

/**
 * Description of StylesSemantics
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class StylesSemantics {

    //<style> 	Defines style information for a document
    
    //<div> 	Defines a section in a document
    /**
     * {@see \GIgenerator\DML\HTML5\StylesSemantics\Div}
     *
     * @version     GI-HTML5.00.01
     * @since       2017-04-16
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\StylesSemantics\Div
     * 
     */
    public static function Div($content, array $attributes = array()) {
        return new StylesSemantics\Div($content, $attributes);
    }

    //<span> 	
    /**
     * {@see \GIgenerator\DML\HTML5\StylesSemantics\Span}
     *
     * @version     GI-HTML5.00.01
     * @since       2017-04-16
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @return      \GIgenerator\DML\HTML5\StylesSemantics\Span
     * 
     */
    public static function Span(array $content = array(), array $attributes = array()) {
        return new StylesSemantics\Span($content,$attributes);
    }

}
