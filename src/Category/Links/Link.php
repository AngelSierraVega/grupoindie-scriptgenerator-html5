<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Links;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute as Attribute;

/**
 * Defines a link between a document and an external resource.
 * 
 * https://www.w3schools.com/tags/tag_link.asp
 *
 * @package HTML5
 * @subpackage Main
 * @category API
 * 
 * @author Roberto Guzmán Sánchez <robertogs.soft@hotmail.com>
 * @since 2017-05-15
 * @version GIG-HTML5.00.02
 * 
 * 
 */
class Link extends Node {

    use Attribute\GlobalAttributes;
    use Attribute\crossoriginTrait;
    use Attribute\hrefTrait;
    use Attribute\hreflangTrait;
    use Attribute\mediaTrait;
    use Attribute\relTrait;
    use Attribute\sizesTrait;
    use Attribute\targetTrait;
    use Attribute\typeTrait;

    /**
     * Creates a new hyperlink.
     * 
     * @param string $href Specifies the URL of the page the link goes to.
     * @param string $rel  Specifies the relationship between the current document and the linked document.
     *
     * @since       GIG-HTML5.00.01
     * @author      Roberto Guzmán Sánchez <robertogs.soft@hotmail.com>
     */    
    public function __construct($href, $rel) {
        parent::__construct("link", true, ["href" => $href, "rel" => $rel]);
    }

}
