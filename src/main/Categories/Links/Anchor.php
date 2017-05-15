<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

/**
 * Defines a placeholder for a hyperlink.
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
class Anchor extends \GIgenerator\DML\HTML5\Node {

    use \GIgenerator\DML\HTML5\Handlers\GlobalAttributes;
    use \GIgenerator\DML\HTML5\Handlers\HyperlinkAttributes;


//download 	filename 	Specifies that the target will be downloaded when a user clicks on the hyperlink
//href 	URL 	Specifies the URL of the page the link goes to
//hreflang 	language_code 	Specifies the language of the linked document
//media 	media_query 	Specifies what media/device the linked document is optimized for
//rel 	Specifies the relationship between the current document and the linked document
//target 	framename 	Specifies where to open the linked document
//type 	media_type 	Specifies the media type of the linked document

    /**
     * Creates a new anchor.
     * 
     * @param       mixed|array $content Either the 
     * 
     * @version     GI-HTML5.01.01
     * @since       2017-04-15
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($content) {
        parent::__construct("a", false, is_array($content) ? $content : [$content]);
        
    }

}
