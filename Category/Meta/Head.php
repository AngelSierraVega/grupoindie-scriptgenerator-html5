<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Meta;

use \GIndie\ScriptGenerator\DML;
use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Category\Basic\Title;

/**
 * Element is a container for all the head elements
 * More info. at  <https://www.w3schools.com/tags/tag_head.asp>
 * 
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 */
class Head extends Node {

    /**
     * The meta tags of the Head object
     * 
     * @var     array|null
     * 
     * @since   GIG-HTML5.00.04
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    private $_metas;

    /**
     * Creates a new GIGhtml5_document_html_head object
     * 
     * @param   string $charset The encoding of the html element.
     * @param   string $title The title of the html element.
     * 
     * @since   GIG-HTML5.00.05
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @edit SG-HTML5.00.01 18-01-18
     */
    function __construct($charset, $title) {
        parent::__construct(static::TYPE_DEFAULT, "head",["charset" => $charset]);
        $this->addContent(new Title($title));
    }

    /**
     * Adds a 'link' tag as a child of the current object.
     * 
     * @param $href Specifies the location of the linked document.
     * @param $rel Specifies the relationship between the current document and
     * the linked document.
     * 
     * @since GIG-HTML5.00.05
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function addLink($href, $rel) {
        return $this->addContentGetPointer(DML\Node::Simple("link",
                                ["rel" => $rel, "href" => $href]));
    }

    /**
     * 
     * @param array $attributes
     * @since GIG-HTML5.00.05
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function addMeta(array $attributes) {
        if (isset($this->_metas) == FALSE) {
            $this->_metas = $this->addContentGetPointer(DML\Node::ContentOnly([]));
        }
        return $this->_metas->addContentGetPointer(new Meta($attributes));
    }

}
