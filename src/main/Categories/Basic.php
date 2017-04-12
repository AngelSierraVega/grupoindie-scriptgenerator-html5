<?php

/* 
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */
namespace GIgenerator\DML\HTML5\Basic;
/**
 * Represents a Doctype object
 * @version beta.00.03
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @version alpha.00.02
 * @since 2016-12-28
 */
class Doctype extends \GIndie\DML\Node\Node {

    /**
     * Creates a new Doctype object
     * @param $doctype The document type
     * @version alpha.00.02
     * @since 2016-12-28
     */
    function __construct($doctype) {
        try {
            parent::__construct($tag = "!DOCTYPE", $emptyNode = true, [$doctype => null]);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}

