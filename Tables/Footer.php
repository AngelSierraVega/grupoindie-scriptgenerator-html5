<?php

namespace GIndie\ScriptGenerator\HTML5\Tables;

/**
 * The <tfoot> tag is used to group footer content in an HTML table.
 * 
 * @link <https://www.w3schools.com/tags/tag_tfoot.asp>
 *
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Tables
 *
 * @version 00.70
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Footer extends \GIndie\ScriptGenerator\HTML5\Node
{

    /**
     * @since 18-10-15
     */
//    use \GIndie\ScriptGenerator\HTML5\Attribute\GlobalAttributes;

    /**
     * @since 18-10-15
     */
    public function __construct($data = null)
    {
        parent::__construct(static::TYPE_DEFAULT, "tfoot");
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
     * @since 18-10-15
     */
    public function addRow($data)
    {
        switch (true)
        {
            case \is_a($data, Cell::class, true):
//                
                $row = new Row();
                $row->addCell($data);
                $this->addContent($row);
                break;
            case \is_array($data):
                $row = new Row();
                foreach ($data as $key => $value) {
                    if(\is_a($value, Cell::class,true)){
                        $row->addCell($value);
//                        \trigger_error("todo", \E_USER_ERROR);
                    }else{
                        $row->addCell(Cell::header($value));
                    }
                    
                }
                $this->addContent($row);
                break;
            default:
                var_dump($data);
                \trigger_error("todo", \E_USER_ERROR);
        }
    }

}
