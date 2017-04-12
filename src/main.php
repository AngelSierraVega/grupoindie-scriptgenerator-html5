<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5;

require_once __DIR__ . '/../../DML/dist/DML.phar';

require_once __DIR__ . '/main/Node.php';

class Basic {
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


class Span extends \GIgenerator\DML\HTML5\Node {

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
