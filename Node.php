<?php

/**
 * HTML5 - Node 2016-12-21
 *
 * @copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5
 *
 * @version 00.D0
 */

namespace GIndie\ScriptGenerator\HTML5;

use GIndie\ScriptGenerator\DML;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Represents an <b>HTML5</b> element.
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-03
 * - Updated for new DML node
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock
 * @edit 19-04-16
 * - Added Global HTML attributes
 * @edit 19-04-22
 * - Class extends DML\Node
 * - Abstract class
 * @todo Rename to Element
 * @todo Validate abstract class
 */
abstract class Node extends DML\Node
{

    /**
     * Global HTML attributes
     */
    use Attribute\classTrait; //Specifies one or more classnames for an element (refers to a class in a style sheet)
    use Attribute\accesskeyTrait; //Specifies a shortcut key to activate/focus an element
    use Attribute\contenteditableTrait; //Specifies whether the content of an element is editable or not
    use Attribute\contextmenuTrait; //Specifies a context menu for an element. The context menu appears when a user right-clicks on the element
    use Attribute\dataTrait; //Used to store custom data private to the page or application
    use Attribute\dirTrait; //Specifies the text direction for the content in an element
    use Attribute\draggableTrait; //Specifies whether an element is draggable or not
    use Attribute\dropzoneTrait; //Specifies whether the dragged data is copied, moved, or linked, when dropped
    use Attribute\hiddenTrait; //Specifies that an element is not yet, or is no longer, relevant
    use Attribute\idTrait; //Specifies a unique id for an element
    use Attribute\langTrait; //Specifies the language of the element's content
    use Attribute\spellcheckTrait; //Specifies whether the element is to have its spelling and grammar checked or not
    use Attribute\styleTrait; //Specifies an inline CSS style for an element
    use Attribute\tabindexTrait; //Specifies the tabbing order of an element
    use Attribute\titleTrait; //Specifies extra information about an element
    use Attribute\translateTrait; //Specifies whether the content of an element should be translated or not

    /**
     * @var \GIgenerator\DML\Node Stores an instance of the content-only node containing the scripts. 
     * 
     * @since GIG-HTML5.01.??
     * @edit ??
     * - Renamed due to compliance with PSR-1.
     * 
     */
    private $scripts;

    /**
     * Adds a 'script' node as a child of the the html5 object.
     * 
     * @param string $script The script or the file path to the script.
     * @param boolean $external [optional] TRUE if script is an external file. Default FALSE.
     * 
     * @return \GIgenerator\DML\HTML5\Programming\Script
     * 
     * @since GIG-HTML5.01.??
     * @edit  
     * renamed vars from _scripts to scripts
     * 
     */
    public function addScript($script, $external = false)
    {
        if (isset($this->scripts) == false) {
            $this->scripts = $this->addContentGetPointer(DML\Factory::contentOnly([]));
        }
        return $this->scripts->addContentGetPointer(Category\Programming::Script($script, $external));
    }

    /**
     * Adds a 'script' node that executes when document is ready.
     * 
     * @param       string $script The script or the file path to the script.
     * @since       GIG-HTML5.00.02
     * 
     * @return      \GIgenerator\DML\HTML5\Programming\Script
     * @throws      NA
     * 
     */
    public function addScriptOnDocumentReady($script)
    {
        return $this->addScript("$(document).ready(function () { {$script} });", false);
    }

    /**
     * 
     * @return type
     * @edit SG-HTML5.00.01
     */
    public function __toString()
    {
//        if ($this->_emptyNode == \FALSE) {
//            $this->addContent();
//        }
        return parent::__toString() . $this->defineScript();
    }

    /**
     * @return string
     */
    public function defineScript()
    {
        return "";
    }

}
