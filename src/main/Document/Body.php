<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5\Document;

/**
 * Represents a Body object
 * @version beta.00.02
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2016-12-28
 */
class Body extends \GIndie\DML\HTML5\Node {

    /**
     * Creates a new Body object
     * @version beta.00.02
     * @since 2016-12-28
     */
    function __construct() {
        try {
            parent::__construct($tag = "body");
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}
