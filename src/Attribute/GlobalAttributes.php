<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * An abstraction layer for the [] an HTML5 node.
 * 
 * https://www.w3schools.com/tags/ref_standardattributes.asp
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-DML.00
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait GlobalAttributes {

    use classTrait;

    //accesskey 	Specifies a shortcut key to activate/focus an element
    //class 	Specifies one or more classnames for an element (refers to a class in a style sheet)
    //contenteditable 	Specifies whether the content of an element is editable or not
    //contextmenu 	Specifies a context menu for an element. The context menu appears when a user right-clicks on the element
    //data-* 	Used to store custom data private to the page or application
    //dir 	Specifies the text direction for the content in an element
    //draggable 	Specifies whether an element is draggable or not
    //dropzone 	Specifies whether the dragged data is copied, moved, or linked, when dropped
    //hidden 	Specifies that an element is not yet, or is no longer, relevant
    //id 	Specifies a unique id for an element
    //lang 	Specifies the language of the element's content
    //spellcheck 	Specifies whether the element is to have its spelling and grammar checked or not
    //style 	Specifies an inline CSS style for an element
    //tabindex 	Specifies the tabbing order of an element
    //title 	Specifies extra information about an element
    //translate 	Specifies whether the content of an element should be translated or not
    public function setId($value) {
        $this->setAttribute("id", $value);
        return $this;
    }
    
    public function getId() {
        return $this->getAttribute("id");
    }

}
