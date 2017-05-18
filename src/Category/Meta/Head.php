<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\Meta;

use \GIndie\Generator\DML as DML;
use \GIndie\Generator\DML\HTML5\Node;
use \GIndie\Generator\DML\HTML5\Category\Basic\Title;

//require_once __DIR__ . '/Head/Meta.php';
//require_once __DIR__ . '/Head/Title.php';

/**
 * Represents a GIGhtml5_document_html_head object
 * @version     GI-HTML5.00
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since       2016-12-28
 */
class Head extends Node {

    /**
     * The meta tags of the Head object
     * @var     array|null
     * @version GIHTML5.04
     * @since   2016-12-28
     */
    private $_metas;

    /**
     * Creates a new GIGhtml5_document_html_head object
     * @version beta.00.05
     * @param $charset The encoding of the html element.
     * @param $title The title of the html element.
     * @since 2016-12-28
     */
    function __construct($charset, $title) {
        parent::__construct($tag = "head", $emptyNode = false,
                ["charset" => $charset]);
        $this->addContent(new Title($title));
    }

    /**
     * @version beta.00.04
     * Adds a 'link' tag as a child of the current object.
     * @param $href Specifies the location of the linked document.
     * @param $rel Specifies the relationship between the current document and
     * the linked document.
     * @since 2016-12-28
     */
    public function addLink($href, $rel) {
        return $this->addContent(DML\Node::Simple("link",
                                ["rel" => $rel, "href" => $href]));
    }

    /**
     * 
     * @version beta.00.04
     * @param array $attributes
     * @since 2016-12-28
     */
    public function addMeta(array $attributes) {
        if (isset($this->_metas) == FALSE) {
            $this->_metas = $this->addContent(DML\Node::ContentOnly([]));
        }
        return $this->_metas->addContent(new Meta($attributes));
    }

}
