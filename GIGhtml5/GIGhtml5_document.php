<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */

/**
 * Represents a GIGhtml5_document object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document extends GIGhtml5 {

    private $_doctype;
    private $_html;

    /**
     * Creates a new GIGhtml5_document object
     * @param $title. The title of the html document
     * @param $lang [optional]. The languaje of the html document
     * @param $doctype [optional].. The document type
     * @param $charset [optional].. The encoding of the html document
     * @version beta.00.01
     */
    function __construct($title, $lang = "en", $doctype = "html", $charset = "UTF-8") {
        try {
            parent::__construct($tag = null, $emptyNode = false);
            $this->_doctype = $this->addElement(new GIGhtml5_document_doctype($doctype));
            $this->_html = $this->addElement(new GIGhtml5_document_html($title, $lang, $charset) );
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
            if(isset($this->_html)== FALSE ){
                return parent::addElement($element);
            }else{
                return $this->_html->addElement($element);
            }
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_body object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_body extends GIGhtml5 {

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
class GIGhtml5_document_doctype extends GIGnode {

    /**
     * Creates a new GIGhtml5_document_doctype object
     * @param $doctype. The document type
     * @version GIGnode.alpha.00.01
     */
    function __construct($doctype) {
        try {
            parent::__construct($tag = "!DOCTYPE", $emptyNode = true, [$doctype]);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_html object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_html extends GIGnode {
    
    private $_body;

    /**
     * Creates a new GIGhtml5_document_html object
     * @param $lang. The languaje of the html element
     * @param $title. The title of the html element
     * @param $charset. The encoding of the html element
     * @version beta.00.01
     */
    function __construct($title,$lang,$charset) {
        try {
            parent::__construct($tag = "html", $emptyNode = false, ["lang" => $lang]);
            $this->addElement(new GIGhtml5_document_html_head($charset, $title));
            $this->_body = $this->addElement(new GIGhtml5_document_body());
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
            if(isset($this->_body)== FALSE ){
                return parent::addElement($element);
            }else{
                return $this->_body->addElement($element);
            }
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_html_head object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_html_head extends GIGnode {
    /**
     * Creates a new GIGhtml5_document_html_head object
     * @param $charset. The encoding of the html element
     * @param $title. The title of the html element
     * @version beta.00.01
     */
    function __construct($charset,$title) {
        try {
           parent::__construct($tag = "head", $emptyNode=false);
           $this->addElement(new GIGhtml5_document_html_head_meta(["charset"=>$charset]));
           $this->addElement(new GIGhtml5_document_html_head_title($title));
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }
}

/**
 * Represents a GIGhtml5_document_html_head_meta object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_html_head_meta extends GIGnode {

     /**
     * Creates a new GIGhtml5_document_html_head_meta object
     * @param $attributes. Array representing the attributes of the meta tag
     * @version beta.00.01
     */
    function __construct(Array $attributes) {
        try {
            parent::__construct($tag = "meta", $emptyNode=true, $attributes);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

/**
 * Represents a GIGhtml5_document_html_head_title object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5_document_html_head_title extends GIGnode {

    /**
     * Creates a new GIGhtml5_document_html_head_title object
     * @param $title. The title of the document
     * @version beta.00.01
     */
    function __construct($title) {
        try {
            parent::__construct($tag = "title", $emptyNode=false, [],[$title]);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

