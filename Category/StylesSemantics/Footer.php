<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute as Attribute;

/**
 * Defines a footer section in a document.
 * 
 * https://www.w3schools.com/tags/tag_footer.asp
 * 
 * @package     HTML5
 * @subpackage  Extended
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00
 * @since       2017-04-17
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 */
class Footer extends Node {

    use Attribute\GlobalAttributes;

    /**
     * 
     * @param type $content
     * @param type $classnames
     * 
     * @edit SG-HTML5.00.01 18-01-18
     */
    public function __construct($content, $classnames = null) {
        parent::__construct(static::TYPE_DEFAULT, "footer", [], $content);
        if ($classnames != null) {
            $this->addClass($classnames);
        }
    }

}
