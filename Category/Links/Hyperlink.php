<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Links;

use \GIndie\ScriptGenerator\HTML5\Attribute as Attribute;
/**
 *  Defines a hyperlink.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_a.asp>
 * 
 * @license file://LICENSE
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Links
 * 
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 *
 * @since       2017-04-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Hyperlink extends Anchor {

    /**
     * Creates a new hyperlink.
     * 
     * @param string        $link    Defines a link between a document and an external resource.
     * @param null|mixed    $content Either the content or an array of the content.
     * @param null|string   $target  Specifies where to open the linked document
     * 
     * @since       GIG-HTML5.01.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($link, $content = NULL, $target = NULL) {
        $content = ( $content == NULL ? [] : ( is_array($content) ? $content : [$content] ) );
        parent::__construct($content);
        $this->setHref($link);
        $this->setTarget($target);
    }

}
