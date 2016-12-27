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
/**
 * Represents a Document object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Document extends Node {

    private $_doctype;
    private $_html;

    /**
     * @version NEW beta.00.01 GIGhtml5_document +__construct
     * NEW Creates a new GIGhtml5_document object
     * @param NEW $title. The title of the html document
     * @param NEW $lang [optional]. The languaje of the html document
     * @param NEW $doctype [optional].. The document type
     * @param NEW $charset [optional].. The encoding of the html document
     */
    public function __construct($title, $lang = "en", $doctype = "html", $charset = "UTF-8") {
        try {
            parent::__construct($tag = null, $emptyNode = false);
            $this->_doctype = $this->addContent(new GIGhtml5_document_doctype($doctype));
            $this->_html = $this->addContent(new GIGhtml5_document_html($title, $lang, $charset));
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

    /**
     * overrided
     * @version beta.00.01
     */
    public function addContent($element) {
        try {
            if (isset($this->_html) == FALSE) {
                //parent::addContent($content)
                return parent::addContent($element);
            } else {
                return $this->_html->addContent($element);
            }
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

    /**
     * @version NEW beta.00.02 Class GIGhtml5_document +addHeaderLink
     * NEW Adds a 'link' tag as a child of the head object.
     * @param NEW $href. Specifies the location of the linked document.
     * @param NEW $rel. Specifies the relationship between the current document
     *  and the linked document.
     */
    public function addHeaderLink($href, $rel) {
        try {
            return $this->_html->addHeaderLink($href, $rel);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

    /**
     * @version NEW beta.00.02 Class GIGhtml5_document +addScript
     * NEW Adds a 'script' tag as a child of the the body object.
     * @param NEW $script. The script or the file path to the script.
     * @param NEW $srcFile [optional]. True if script is a sourced file. 
     * Default true.
     */
    public function addScript($script, $srcFile = true) {
        try {
            return $this->_html->addScript($script, $srcFile);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_body object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_body extends Node {

    /**
     * Creates a new GIGhtml5_document_body object
     * @version beta.00.01
     */
    function __construct() {
        try {
            parent::__construct($tag = "body");
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_doctype object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_doctype extends \GIndie\DML\Node\Node {

    /**
     * Creates a new GIGhtml5_document_doctype object
     * @param $doctype. The document type
     * @version GIGnode.alpha.00.01
     */
    function __construct($doctype) {
        try {
            parent::__construct($tag = "!DOCTYPE", $emptyNode = true, [$doctype=>null]);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_html object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_html extends \GIndie\DML\Node\Node {

    private $_body;
    private $_head;

    /**
     * @version UPD beta.00.02
     * Creates a new GIGhtml5_document_html object
     * @param $lang. The languaje of the html element
     * @param $title. The title of the html element
     * @param $charset. The encoding of the html element
     * @version UPD beta.00.02 GIGhtml5_document_html +__construct
     *  - NEW private var _head as an internal referenced object.
     * @version NEW beta.00.01 GIGhtml5_document_html +__construct
     */
    function __construct($title, $lang, $charset) {
        try {
            parent::__construct($tag = "html", $emptyNode = false, ["lang" => $lang]);
            $this->_head = $this->addContent(new GIGhtml5_document_html_head($charset, $title));
            $this->_body = $this->addContent(new GIGhtml5_document_body());
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

    /**
     * overrided
     * @version beta.00.01
     */
    public function addElement($element) {
        try {
            if (isset($this->_body) == FALSE) {
                return parent::addContent($element);
            } else {
                return $this->_body->addContent($element);
            }
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

    /**
     * @version NEW beta.00.02 GIGhtml5_document_html +addHeaderLink
     * NEW Adds a 'link' tag as a child of the head object.
     * @param NEW $href. Specifies the location of the linked document.
     * @param NEW $rel. Specifies the relationship between the current document
     *  and the linked document.
     */
    public function addHeaderLink($href, $rel) {
        try {
            return $this->_head->addHeaderLink($href, $rel);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
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
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_html_head object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_html_head extends \GIndie\DML\Node\Node {

    /**
     * @version NEW beta.00.01 GIGhtml5_document_html_head +__construct
     * NEW Creates a new GIGhtml5_document_html_head object
     * @param NEW $charset. The encoding of the html element
     * @param NEW $title. The title of the html element
     */
    function __construct($charset, $title) {
        try {
            parent::__construct($tag = "head", $emptyNode = false);
            $this->addContent(new GIGhtml5_document_html_head_meta(["charset" => $charset]));
            $this->addContent(new GIGhtml5_document_html_head_title($title));
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

    /**
     * @version NEW beta.00.02 GIGhtml5_document_html_head +addHeaderLink
     * NEW Adds a 'link' tag as a child of the current object.
     * @param NEW $href. Specifies the location of the linked document.
     * @param NEW $rel. Specifies the relationship between the current document and
     * the linked document.
     */
    public function addHeaderLink($href, $rel) {
        try {
            $tmpLink = new GIGhtml5("link", true);
            $tmpLink->setAttribute("rel", $rel);
            $tmpLink->setAttribute("href", $href);
            return $this->addContent($tmpLink);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_html_head_meta object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_html_head_meta extends \GIndie\DML\Node\Node {

    /**
     * Creates a new GIGhtml5_document_html_head_meta object
     * @param $attributes. Array representing the attributes of the meta tag
     * @version beta.00.01
     */
    function __construct(Array $attributes) {
        try {
            parent::__construct($tag = "meta", $emptyNode = true, $attributes);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_html_head_title object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_html_head_title extends \GIndie\DML\Node\Node {

    /**
     * Creates a new GIGhtml5_document_html_head_title object
     * @param $title. The title of the document
     * @version beta.00.01
     */
    function __construct($title) {
        try {
            parent::__construct($tag = "title", $emptyNode = false, [], [$title]);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}
