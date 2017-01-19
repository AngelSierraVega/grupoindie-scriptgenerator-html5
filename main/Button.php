<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5;

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
