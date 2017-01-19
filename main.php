<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5;

require_once __DIR__ . '/../GI_DML_Node/main.php';
require_once __DIR__ . '/main/Node.php';
require_once __DIR__ . '/main/Anchor.php';
require_once __DIR__ . '/main/List_.php';
require_once __DIR__ . '/main/Document.php';
require_once __DIR__ . '/main/Text.php';
require_once __DIR__ . '/main/Button.php';

class Factory extends \GIndie\DML\Node\Factory {

    use \GIndie\DML\HTML5\_protectedAttrs;

    /**
     * Creates an empty DML node.
     * 
     * @param   $tag
     * @param   $attributes
     * 
     * @return  Node An object representation of an empty DML node.
     * 
     * @example Empty node.
     *  <pre>echo GIndie\DML\HTML5\Factory::Empty_("input")</pre> 
     *  <i><pre><input \></pre></i>
     * 
     * @version     beta.00.01
     * @since       2016-12-22
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public static function Empty_($tag, array $attributes = []) {
        try {
            return new self($tag, true, $attributes);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * 
     * @param type $title
     * @param type $lang
     * @param type $doctype
     * @param type $charset
     */
    public static function Document($title, $lang = "en", $doctype = "html", $charset = "UTF-8") {
        try {
            return new Document($title, $lang, $doctype, $charset);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    public static function Anchor($link, $text = null, $target = null) {
        try {
            return new Anchor\Anchor($link, $text, $target);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    public static function Div(array $content = null) {
        try {
            return new BuildingBlocks\Div([], $content);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    public static function Span(array $content = null) {
        try {
            return new BuildingBlocks\Span($attributes, $content);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}

namespace GIndie\DML\HTML5\BuildingBlocks;

class Span extends \GIndie\DML\HTML5\Node {

    public function __construct($attributes = array(), $content = array()) {
        parent::__construct("span", false, $attributes, $content);
    }

}

/**
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-01-18
 * @version beta.00.01
 */
class Div extends \GIndie\DML\HTML5\Node {

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
