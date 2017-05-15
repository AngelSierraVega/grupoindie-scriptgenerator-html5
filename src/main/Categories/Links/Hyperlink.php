<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Links;

use GIgenerator\DML\HTML5 as HTML5;
use GIgenerator\DML\HTML5\Handlers as Handlers;

//use Handlers\Hyperlink as Hyperlink;

/**
 * Defines a hyperlink.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_a.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00
 * @since       2017-04-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Hyperlink extends HTML5\Node implements Handlers\Hyperlink {

    use Handlers\GlobalAttributes;
    use Handlers\HyperlinkAttributes;

    /**
     * Creates a new hyperlink.
     * 
     * @param       null|mixed $content Either the content or an array of the content.
     * 
     * @version     GI-HTML5.01.01
     * @since       2017-04-15
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($link, $content = NULL, $target = NULL) {
        $content = ( $content == NULL ? [] : ( is_array($content) ? $content : [$content] ) );
        parent::__construct("a", FALSE, ["href" => $link], $content);
        if ($target != NULL) {
            $this->setTarget($target);
        }
    }

}
