<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Meta;

/**
 * Represents a GIGhtml5_document_html_head_meta object
 * @version     GI-HTML5.00
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2016-12-28
 */
class Meta extends \GIndie\Generator\DML\HTML5\Node {

    /**
     * Creates a new Meta object
     * @version beta.00.02
     * @param Array $attributes An array representing the attributes of the meta tag
     * @since 2016-12-28
     */
    function __construct(Array $attributes) {
        parent::__construct($tag = "meta", $emptyNode = "closed", $attributes);
    }

}
