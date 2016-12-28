<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5\Document\Head;

/**
 * Represents a Title object
 * @version beta.00.02
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2016-12-28
 */
class Title extends \GIndie\DML\Node\Node {

    /**
     * Creates a new Title object
     * @version beta.00.02
     * @param $title The title of the document
     * @since 2016-12-28
     */
    function __construct($title) {
        try {
            parent::__construct($tag = "title", $emptyNode = false, [], [$title]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}
