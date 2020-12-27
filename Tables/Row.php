<?php

/**
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Tables
 *
 * @version 00.AA
 * @since 18-02-24
 */

namespace GIndie\ScriptGenerator\HTML5\Tables;

/**
 * The <tr> tag defines a row in an HTML table.
 * 
 * A <tr> element contains one or more <th> or <td> elements.
 * 
 * @link <https://www.w3schools.com/tags/tag_tr.asp>
 *
 * @edit 18-03-09
 * - Class extends \GIndie\ScriptGenerator\HTML5\Node
 * - Created __construct()
 * @edit 19-01-13
 * - Updated addContent()
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Row extends \GIndie\ScriptGenerator\HTML5\Node
{
 
    /**
     * @since 19-02-03
     */
//    use \GIndie\ScriptGenerator\HTML5\Attribute\GlobalAttributes;

    /**
     * @since 18-03-09
     * @edit 18-04-10
     * @edit 18-06-22
     * - Handle $data[] as Cell
     */
    public function __construct($data = null)
    {
        parent::__construct(static::TYPE_DEFAULT, "tr");
        switch (true)
        {
            case \is_null($data):
                break;
            case \is_array($data):
                foreach ($data as $key => $value) {
                    if (\is_a($value, Cell::class)) {
                        $this->addStartardCell($value);
                    } else {
                        $this->addStartardCell(Cell::standard($value));
                    }
                }
                break;
            default:
                \trigger_error("todo", \E_USER_ERROR);
        }
    }

    /**
     * 
     * @param type $content
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Row
     * @since 18-03-09
     * @edit 19-01-13
     * - Added $content is_int(), is_float()
     */
    public function addContent($content)
    {
        switch (true)
        {
            case \is_string($content):
            case \is_int($content):
            case \is_float($content):
                $this->addStartardCell(Cell::standard($content));
                break;
            default:
                var_dump($content);
                \trigger_error("@todo", \E_USER_ERROR);
        }
        return $this;
    }

    /**
     * 
     * @param \GIndie\ScriptGenerator\HTML5\Tables\Cell $cell
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Row
     * @since 18-03-09
     */
    public function addStartardCell(Cell $cell)
    {
        parent::addContent($cell);
        return $this;
    }

    /**
     * 
     * @since 18-04-10
     * 
     * @param \GIndie\ScriptGenerator\HTML5\Tables\Cell $cell
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Header
     */
    public function addCell(Cell $cell)
    {
        parent::addContent($cell);
        return $this;
    }

}
