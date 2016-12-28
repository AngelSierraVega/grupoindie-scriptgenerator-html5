<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5;

require_once __DIR__ .'/Document/Head.php';
require_once __DIR__ .'/Document/Body.php';

/**
 * Represents a Document object
 * @version beta.00.03
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2016-12-28
 */
class Document extends Node {

    private $_doctype;
    private $_html;

    /**
     * Creates a new Document object
     * @version beta.00.02
     * @param $title The title of the html document.
     * @param $lang [optional] The languaje of the html document.
     * @param $doctype [optional] The document type.
     * @param $charset [optional] The encoding of the html document.
     */
    public function __construct($title, $lang = "en", $doctype = "html", $charset = "UTF-8") {
        try {
            parent::__construct($tag = null, $emptyNode = false);
            $this->_doctype = $this->addContent(new Doctype($doctype));
            $this->_html = $this->addContent(new HTML($title, $lang, $charset));
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * 
     * @version beta.00.02
     * @since 2016-12-28
     */
    public function addContent($content) {
        try {
            if (isset($this->_html) == FALSE) {
                return parent::addContent($content);
            } else {
                return $this->_html->addContent($content);
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * Adds a 'link' tag as a child of the head object.
     * @version beta.00.03
     * @param NEW $href. Specifies the location of the linked document.
     * @param NEW $rel. Specifies the relationship between the current document
     *  and the linked document.
     * @since 2016-12-28
     */
    public function addLink($href, $rel) {
        try {
            return $this->_html->addLink($href, $rel);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * Adds a 'script' tag as a child of the the body object.
     * @version beta.00.03
     * @param $script The script or the file path to the script.
     * @param $srcFile [optional] True if script is a sourced file. 
     * Default true.
     * @since 2016-12-28
     */
    public function addScript($script, $srcFile = true) {
        try {
            return $this->_html->addScript($script, $srcFile);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}

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

/**
 * Represents a HTML object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2016-12-28
 */
class HTML extends \GIndie\DML\Node\Node {

    private $_body;
    private $_head;

    /**
     * Creates a new 'html' tag object
     * @version beta.00.03
     * @param $lang The languaje of the html element
     * @param $title The title of the html element
     * @param $charset The encoding of the html element
     * @since 2016-12-28
     * @edit    beta.00.02<br />
     *          NEW private var _head as an internal referenced object.
     */
    function __construct($title, $lang, $charset) {
        try {
            parent::__construct($tag = "html", $emptyNode = false, ["lang" => $lang]);
            $this->_head = $this->addContent(new Document\Head($charset, $title));
            $this->_body = $this->addContent(new Document\Body());
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * Alias for addContent
     * @version beta.00.03
     * @since 2016-12-28
     */
    public function addContent($content) {
        try {
            if (isset($this->_body) == FALSE) {
                return parent::addContent($content);
            } else {
                return $this->_body->addContent($content);
            }
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

    /**
     * Alias for addContent
     * @version beta.00.03
     * @since 2016-12-28
     */
    public function addElement($element) {
        try {
            $this->addContent($element);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

    /**
     * Adds a 'link' tag as a child of the head object.
     * @version beta.00.03
     * @param $href Specifies the location of the linked document.
     * @param $rel Specifies the relationship between the current document
     *  and the linked document.
     * @since 2016-12-28
     */
    public function addLink($href, $rel) {
        try {
            return $this->_head->addLink($href, $rel);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * @version NEW beta.00.02 GIGhtml5_document_html +addScript
     * NEW Adds a 'script' tag as a child of the the body object.
     * @param NEW $script. The script or the file path to the script.
     * @param NEW $srcFile. True if script is a sourced file. 
     */
    public function addScript($script, $srcFile) {
        try {
            return $this->_body->addScript($script, $srcFile);
        } catch (Exception $e) {
            displayError($e);
        }
    }

}
