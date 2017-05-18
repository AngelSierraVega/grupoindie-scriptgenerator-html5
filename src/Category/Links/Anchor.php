<?php

namespace GIndie\Generator\DML\HTML5\Category\Links;

use \GIndie\Generator\DML\HTML5\Node;
use \GIndie\Generator\DML\HTML5\Attribute As Attribute;

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
 * @version     GIG-HTML5.00.02
 * @since       2017-04-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Anchor extends Node {

    use Attribute\GlobalAttributes;
    use Attribute\HyperlinkAttributes;
    /**
     * Creates a new anchor.
     * 
     * @param       mixed|array $content Either the content or an array of the content.
     * 
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($content = []) {
        parent::__construct("a", false, [],
                is_array($content) ? $content : [$content]);
    }

}
