<?php

namespace GIndie\ScriptGenerator\HTML5\Tables;

/**
 * The <thead> tag is used to group header content in an HTML table.
 * 
 * @link <https://www.w3schools.com/tags/tag_thead.asp>
 *
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Tables
 *
 * @since 18-02-24
 * @edit 18-05-18
 * @version 00.A2
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Header extends \GIndie\ScriptGenerator\HTML5\Node
{

    /**
     * @since 18-05-18
     */
//    use \GIndie\ScriptGenerator\HTML5\Attribute\GlobalAttributes;

    /**
     * @since 18-04-10
     * @edit 18-05-18
     */
    public function __construct($data = null)
    {
        parent::__construct(static::TYPE_DEFAULT, "thead");
        switch (false)
        {
            case \is_null($data):
                $this->addRow($data);
                break;
        }
    }

    /**
     * 
     * @param type $data
     * @since 18-05-18
     */
    public function addRow($data)
    {
        switch (true)
        {
            case \is_a($data, Cell::class, true):
                $row = new Row();
                $row->addCell($data);
                $this->addContent($row);
                break;
            case \is_array($data):
                $row = new Row();
                foreach ($data as $key => $value) {
                    $row->addCell(Cell::header($value));
                }
                $this->addContent($row);
                break;
            default:
                var_dump($data);
                \trigger_error("todo", \E_USER_ERROR);
        }
    }

}
