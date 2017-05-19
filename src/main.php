<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5;

spl_autoload_register(function($className) {
    if (substr($className, -4) == 'Test') {
        $className = substr($className, 0, \strrpos($className, "Test"));
    }
    $edited = substr($className,
            strlen(__NAMESPACE__) + strrpos($className, __NAMESPACE__));
    $edited = str_replace("\\", \DIRECTORY_SEPARATOR, __DIR__ . $edited) . ".php";
    if (is_readable($edited)) {
        require_once($edited);
    }
});

require_once __DIR__ . '/main/common.php';


//require_once __DIR__ . '/../../DML/dist/DML.phar';
//require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/GIgenerator/DML/dist/DML.phar';
//require_once __DIR__ . '/main/Handlers/Classes.php';
//require_once __DIR__ . '/main/Handlers/Scripts.php';

/**
 * Represents an <b>HTML5</b> node.
 * 
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.01.03
 * @since       2016-12-21
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Node extends \GIndie\Generator\DML\Node\Node {

    /**
     * @deprecated since GIG-HTML5.01.03
     * Calls internal method addClass on trying to add a class attribute.
     * 
     * See internal method {@see \GIgenerator\DML\HTML5\Handlers\Classes::addClass()}
     * See parent method {@see \GIgenerator\DML\Node\Tag\OpenTag::setAttribute()}
     * 
     * @param       string $attributeName
     * @param       string $value [optional]
     * 
     * @return      boolean TRUE if setted. FALSE otherwize
     * @throws      NA
     * 
     * @version     GI-HTML5.01.01
     * @since       2016-12-21
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function setAttributeDPR($attributeName, $value = NULL) {
        switch ($attributeName) {
            case "class":
                return $this->addClass($value);
                break;
            default:
                return parent::setAttribute($attributeName, $value);
                break;
        }
    }

    /**
     * @internal     
     * @var         \GIgenerator\DML\Node  $_scripts Stores an instance of the node containing the scripts. 
     * 
     * @version     GIG-HTML5.00.01
     * 
     * @since       2017-03-14
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */
    private $_scripts;

    /**
     * Adds a 'script' node as a child of the the html5 object.
     * 
     * @version     GIG-HTML5.00.01
     * 
     * @param       string $script The script or the file path to the script.
     * @param       boolean $external [optional] TRUE if script is an external file. Default FALSE.
     * 
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since       2017-03-14
     * 
     * @return      \GIgenerator\DML\HTML5\Programming\Script
     * @throws      NA
     * 
     */
    public function addScript($script, $external = FALSE) {
        if (isset($this->_scripts) == FALSE) {
            $this->_scripts = $this->addContent(\GIgenerator\DML\Node::ContentOnly([]));
        }
        return $this->_scripts->addContent(\GIgenerator\DML\HTML5\Programming::Script($script,
                                $external));
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
    public function addScriptOnDocumentReady($script) {
        return $this->addScript("$(document).ready(function () { {$script} });",
                        false);
    }

}

//require_once __DIR__ . '/main/Handlers/GlobalAttributes.php';
//require_once __DIR__ . '/main/Handlers/Hyperlink.php';
//
//require_once __DIR__ . '/main/Categories/Basic.php';
//require_once __DIR__ . '/main/Categories/StylesSemantics.php'; // Partial: Only <style> <div>  <span>
//require_once __DIR__ . '/main/Categories/Links.php';
//require_once __DIR__ . '/main/Categories/Lists.php'; // Partial: Not <menu> or <menuitem>
//require_once __DIR__ . '/main/Categories/Meta.php';
//require_once __DIR__ . '/main/Categories/Programming.php';

require_once __DIR__ . '/main/Document.php';

