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
 * Defines HTML headings.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_hn.asp>
 *
 * @version     GI-HTML5.01
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Header extends \GIgenerator\DML\HTML5\Node {

    use \GIgenerator\DML\HTML5\Handlers\GlobalAttributes;

    /**
     * Creates a new Header object
     * 
     * @todo        Error throwing on $level
     * 
     * @param       int $level  [1-6] the header level
     * @param       mixed $content  The content of the header
     * @param       NULL|string $classnames  The space separated class names.
     * 
     * @version     GI-HTML5.01.01
     * @since       2017-04-14
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($level, $content, $classnames = NULL) {
        parent::__construct("h" . $level, false, [], [$content]);
        if ($classnames != NULL) {
            $this->addClass($classnames);
        }
    }

}
