<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Lists;

/**
 * Description of ListItem
 * https://www.w3schools.com/tags/tag_li.asp
 * 
 * @param array $attributes
 * @param array $content
 * @since   2017-01-04
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @version beta.00.01
 */
class ListItem extends \GIgenerator\DML\HTML5\Node {

    /**
     * 
     * @param array $attributes
     * @param array $content
     * @since   2017-01-04
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @version beta.00.01
     */
    public function __construct(array $attributes = array(), array $content = array()) {
        parent::__construct("li", false, $attributes, $content);
    }

}
