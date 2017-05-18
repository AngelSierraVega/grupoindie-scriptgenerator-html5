<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\Basic;

/**
 * Defines a paragraph.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_p.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.01
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Paragraph extends \GIndie\Generator\DML\HTML5\Node {

    use \GIndie\Generator\DML\HTML5\Attribute\GlobalAttributes;

    /**
     * Creates a new Paragraph object.
     * 
     * @param       mixed $content  The content of the paragraph.
     *
     * @version     GI-HTML5.01.01
     * @since       2017-04-14
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($content) {
        parent::__construct("p", false, [], [$content]);
    }

}
