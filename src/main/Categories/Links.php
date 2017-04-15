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

/**
 * Factory Pattern for the <b>links</b> of <b>HTML5</b>.
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.01
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Links {
    //put your code here
}

namespace GIgenerator\DML\HTML5\Links;

trait Link {
    public function setLink($link, $text = null) {
        try {
            $this->setAttribute("href", $link);
            if ($text != null) {
                $this->addContent($text);
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }
}

/**
 * Represents a Document object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Anchor extends \GIgenerator\DML\HTML5\Node {

    use Link;
    
    public function __construct($link, $text = null, $target = null) {
        try {
            $_attributes = ["href" => $link];
            if($target != null){
                $_attributes["target"] = $target;
            }
            parent::__construct("a", false, $_attributes, $text != null ? [$text] : []);
        } catch (Exception $e) {
            displayError($e);
        }
    }
}

