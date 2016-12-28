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

require_once __DIR__ .'/Head/Meta.php';
require_once __DIR__ .'/Head/Title.php';

/**
 * Represents a GIGhtml5_document_html_head object
 * @version beta.00.03
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2016-12-28
 */
class Head extends \GIndie\DML\Node\Node {

    /**
     * Creates a new GIGhtml5_document_html_head object
     * @version beta.00.03
     * @param $charset The encoding of the html element.
     * @param $title The title of the html element.
     * @since 2016-12-28
     */
    function __construct($charset, $title) {
        try {
            parent::__construct($tag = "head", $emptyNode = false);
            $this->addContent(new Head\Meta(["charset" => $charset]));
            $this->addContent(new Head\Title($title));
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @version beta.00.03
     * Adds a 'link' tag as a child of the current object.
     * @param $href Specifies the location of the linked document.
     * @param $rel Specifies the relationship between the current document and
     * the linked document.
     * @since 2016-12-28
     */
    public function addLink($href, $rel) {
        try {
            return $this->addContent(new \GIndie\DML\Node\Node("link",false,["rel"=>$rel,"href"=>$href]));
        } catch (Exception $e) {
            displayError($e);
        }
    }

}