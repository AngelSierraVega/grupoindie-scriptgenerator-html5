<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 * 
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-04-14
 * @version DEPRECATED
 * @deprecated since 19-04-16 Attributes defined in abstract HTML node by default
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * An abstraction layer for the [] an HTML5 node.
 * 
 * https://www.w3schools.com/tags/ref_standardattributes.asp
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit 18-02-14
 * - Traits defined
 * @edit 18-11-01
 * - Revised version
 */
trait GlobalAttributesDPR
{

    use classTrait; //Specifies one or more classnames for an element (refers to a class in a style sheet)
    use accesskeyTrait; //Specifies a shortcut key to activate/focus an element
    use contenteditableTrait; //Specifies whether the content of an element is editable or not
    use contextmenuTrait; //Specifies a context menu for an element. The context menu appears when a user right-clicks on the element
    use dataTrait; //Used to store custom data private to the page or application
    use dirTrait; //Specifies the text direction for the content in an element
    use draggableTrait; //Specifies whether an element is draggable or not
    use dropzoneTrait; //Specifies whether the dragged data is copied, moved, or linked, when dropped
    use hiddenTrait; //Specifies that an element is not yet, or is no longer, relevant
    use idTrait; //Specifies a unique id for an element
    use langTrait; //Specifies the language of the element's content
    use spellcheckTrait; //Specifies whether the element is to have its spelling and grammar checked or not
    use styleTrait; //Specifies an inline CSS style for an element
    use tabindexTrait; //Specifies the tabbing order of an element
    use titleTrait; //Specifies extra information about an element
    use translateTrait; //Specifies whether the content of an element should be translated or not
}
