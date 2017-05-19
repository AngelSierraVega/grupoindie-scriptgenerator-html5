<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\StylesSemantics;

use GIndie\Generator\DML\HTML5\Node;
use \GIndie\Generator\DML\HTML5\Attribute;

/**
 *  The <style> tag is used to define style information for an HTML document.
 * More info. at <https://www.w3schools.com/tags/tag_style.asp>
 * 
 * @version     GIG-HTML5.00.04
 *
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 *
 * @since       2017-05-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 *
 */
class Style extends Node {

    use Attribute\GlobalAttributes;
    use Attribute\mediaTrait;
    use Attribute\scopedTrait;
    use Attribute\typeTrait;

    /**
     * Creates a new style object.
     *
     * @param       string $media Specifies what media/device the media resource is optimized for
     * @param       string $scope Specifies that the styles only apply to this element's parent element and that element's child elements
     * @param       string $type  Specifies the media type of the <style> tag
     *
     * @since       GIG-HTML5.00.01
     * @author      IZmir Sanchez Juarez <izmirreffi@gmail.com>
     */
    function __construct($content) {
        parent::__construct("style", FALSE, [], [$content]);
    }

}
