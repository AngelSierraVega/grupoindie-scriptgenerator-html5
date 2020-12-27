<?php

namespace GIndie\ScriptGenerator\HTML5\Tables\Traits;

/**
 * DVLP-SG2-HTML5extended - RowHandler
 *
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Tables
 *
 * @version 00.B3
 * @since 18-02-24
 * @edit 18-02-24
 * - Created addRow(), getRow(), handleRowData(), $rows
 */
trait RowHandler
{

    /**
     * 
     * @param mixed $row
     * @return $this
     * @since 18-02-24
     */
    public function addRow($row)
    {
        $this->rows[] = $this->addContentGetPointer($this->handleRowData($row));
        return $this;
    }

    /**
     * 
     * @param mixed $row
     * @return Row
     * @since 18-08-13
     */
    public function addRowGetPointer($row)
    {
        $this->rows[] = $this->addContentGetPointer($this->handleRowData($row));
        return $this->rows[\sizeof($this->rows) - 1];
    }

    /**
     * 
     * @param int $index
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Row|null
     * @since 18-02-24
     */
    public function getRow($index = 0)
    {
        return isset($this->rows[$index]) ? $this->rows[$index] : null;
    }

    /**
     * 
     * @param mixed $data
     * @return Row
     * @since 18-02-24
     * @edit 18-04-10
     */
    protected function handleRowData($data)
    {
        switch ($data)
        {
            case \is_string($data):
            case \is_subclass_of($data, \GIndie\ScriptGenerator\HTML5\Tables\Row::class, false):
            case \is_a($data, \GIndie\ScriptGenerator\HTML5\Tables\Row::class, false):
                break;
            case \is_array($data):
                $data = new \GIndie\ScriptGenerator\HTML5\Tables\Row($data);
                break;
            default:
                \trigger_error("todo", \E_USER_ERROR);
                break;
        }
        return $data;
    }

    /**
     *
     * @var array 
     * @since 18-02-24
     */
    protected $rows = [];

}
