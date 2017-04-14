<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5;

require_once __DIR__ . '/../../DML/dist/DML.phar';


require_once __DIR__ . '/main/Handlers/Classes.php';
require_once __DIR__ . '/main/Handlers/Scripts.php';

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
 * @version     GI-HTML5.01
 * @since       2016-12-21
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Node extends \GIgenerator\DML\Node {

    use Handlers\classHandler;
    use Handlers\scriptHandler;

    /**
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
    public function setAttribute($attributeName, $value = NULL) {
        switch ($attributeName) {
            case "class":
                return $this->addClass($value);
                break;
            default:
                return parent::setAttribute($attributeName, $value);
                break;
        }
    }

}

require_once __DIR__ . '/main/Handlers/GlobalAttributes.php';

require_once __DIR__ . '/main/Categories/Basic.php';
require_once __DIR__ . '/main/Categories/Links.php';
require_once __DIR__ . '/main/Categories/Lists.php'; // Partial: Not <menu> or <menuitem>
require_once __DIR__ . '/main/Categories/Meta.php';
require_once __DIR__ . '/main/Categories/Programming.php';

require_once __DIR__ . '/main/Document.php';
