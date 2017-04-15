<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

class Span extends \GIgenerator\DML\HTML5\Node {

    public function __construct($attributes = array(), $content = array()) {
        parent::__construct("span", false, $attributes, $content);
    }

    public static function Anchor($link, $text = null, $target = null) {
        return new Basic\Anchor($link, $text, $target);
    }

    public static function Div(array $content = null) {
        return new Basic\Div([], $content);
    }

    public static function Span(array $content = null) {
        return new Basic\Span($attributes, $content);
    }

}

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Div extends \GIgenerator\DML\HTML5\Node {

    /**
     * 
     * @param type $attributes
     * @param type $content
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     */
    public function __construct($attributes = array(), $content = array()) {
        parent::__construct("div", false, $attributes, $content);
    }

}



/**
 * 
 * @since   2017-01-18
 * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @version beta.00.01
 */
class Button extends Node {

    /**
     * @since   2017-01-18
     * @version beta.00.01
     */
    const TYPE_BUTTON = 0;

    /**
     * @since   2017-01-18
     * @version beta.00.01
     */
    const TYPE_RESET = 1;

    /**
     * @since   2017-01-18
     * @version beta.00.01
     */
    const TYPE_SUBMIT = 2;

    use Anchor\Link;

    /**
     * 
     * @since   2017-01-18
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     * @version beta.00.01
     * 
     * @param type $content
     * @param array $attributes
     * @param type $type
     */
    public function __construct($content = null, array $attributes = [], $type = 0) {
        try {
            parent::__construct("button", false, $attributes, $content != null ? [$content] : []);
            switch ($type) {
                case 1:
                    $this->setAttribute("type", "reset");
                    break;
                case 2:
                    $this->setAttribute("type", "submit");
                    break;
                case 0:
                default :
                    $this->setAttribute("type", "button");
                    break;
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }

}





/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Format {

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Strong($content) {
        try {
            return Factory::Simple("strong", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    
    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Bold($content) {
        try {
            return Factory::Simple("b", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * 
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param \GIndie\DML\HTML5\GIndie\DML\HTML5\Node $code
     * @return GIndie\DML\HTML5\Node
     */
    public static function Code(GIndie\DML\HTML5\Node $code) {
        try {
            return Factory::Simple("code", [], [$code]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Italic($content) {
        try {
            return Factory::Simple("i", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since 2017-01-18
     * @version beta.00.01
     * @param type $content
     * @return GIndie\DML\HTML5\Node
     */
    public static function Small($content) {
        try {
            return Factory::Simple("small", [], [$content]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}
