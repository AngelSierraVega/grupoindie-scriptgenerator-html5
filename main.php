<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5;

require_once '../GI_DML_Node/main.php';
require_once 'main/Node.php';

class Factory extends \GIndie\DML\Node\Factory {
    use \GIndie\DML\HTML5\_protectedAttrs;
    
    
    /**
     * Creates an empty DML node.
     * 
     * @param   $tag
     * @param   $attributes
     * 
     * @return  Node An object representation of an empty DML node.
     * 
     * @example Empty node.
     *  <pre>echo GIndie\DML\HTML5\Factory::Empty_("input")</pre> 
     *  <i><pre><input \></pre></i>
     * 
     * @version     beta.00.01
     * @since       2016-12-22
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public static function Empty_($tag, array $attributes = []) {
        try {
            return new self($tag, true, $attributes);
        } catch (Exception $e) {
            displayError($e);
        }
    }
}
