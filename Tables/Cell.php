<?php

namespace GIndie\ScriptGenerator\HTML5\Tables;

/**
 * The <td> tag defines a standard cell in an HTML table.
 * 
 * An HTML table has two kinds of cells:
 *
 * Header cells - contains header information (created with the <th> element)
 * Standard cells - contains data (created with the <td> element)
 *
 * The text in <th> elements are bold and centered by default.
 *
 * The text in <td> elements are regular and left-aligned by default.
 * 
 * @link <https://www.w3schools.com/tags/tag_td.asp>
 *
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Tables
 *
 * @version 00.A0
 * @since 18-02-24
 * @edit SG-HTML5-TBLS.00.01 18-03-09
 * - Class extends \GIndie\ScriptGenerator\HTML5\Node
 * - Created TYPE_STANDARD, TYPE_HEADER, __construct()
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Cell extends \GIndie\ScriptGenerator\HTML5\Node
{

    /**
     * 
     * @param mixed $content
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Cell
     */
    public static function standard($content)
    {
        return new self(static::TYPE_STANDARD, $content);
    }

    /**
     * 
     * @param mixed $content
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Cell
     */
    public static function header($content)
    {
        return new self(static::TYPE_HEADER, $content);
    }

    /**
     * @since SG-HTML5-TBLS.00.01
     */
    const TYPE_STANDARD = "standard";

    /**
     * @since SG-HTML5-TBLS.00.01
     */
    const TYPE_HEADER = "header";

    /**
     * 
     * @param string $type
     * @param mixed|null $content
     * @since SG-HTML5-TBLS.00.01
     */
    public function __construct($type, $content = null)
    {
        switch ($type)
        {
            case static::TYPE_STANDARD:
                parent::__construct(static::TYPE_DEFAULT, "td", null, $content);
                break;
            case static::TYPE_HEADER:
                parent::__construct(static::TYPE_DEFAULT, "th", null, $content);
                break;
            default:
                \trigger_error("not valid", \E_USER_ERROR);
                break;
        }
    }

}
