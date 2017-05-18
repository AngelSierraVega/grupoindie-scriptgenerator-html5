<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\Links;

use GIndie\Generator\DML\HTML5 as HTML5;
use GIndie\Generator\DML\HTML5\Attribute as Attribute;

/**
 * Description of Link
 * 
 * https://www.w3schools.com/tags/tag_link.asp
 *
 * @package HTML5
 * @subpackage Main
 * @category API
 * 
 * @author Roberto Guzmán Sánchez <robertogs.soft@hotmail.com>
 * @since 2017-05-15
 * @version GIG-HTML5.00.01
 * 
 * 
 */
class Link extends HTML5\Node{
    use Attribute\GlobalAttributes;
    //use Handlers\HyperlinkAttributes;
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
     * @param       null|mixed $content Either the content or an array of the content.
     * 
     * @version     GIG-HTML5.01.01
     * @since       2017-05-15
     * @author      Roberto Guzmán Sánchez <robertogs.soft@hotmail.com>
     */
    
    public function __construct($href, $rel) {
        parent::__construct("link",true, [ "href" => $href, "rel" => $rel  ]);
    }
    
}
