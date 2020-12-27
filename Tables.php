<?php

namespace GIndie\ScriptGenerator\HTML5;

/**
 * DVLP-SG2-HTML5extended - Tables
 * 
 * @link <https://www.w3schools.com/html/html_tables.asp>
 *
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Tables
 *
 * @version 00.20
 * @since 18-02-24
 */
class Tables
{

//<table> 	Defines a table
    /**
     * <th> 	Defines a header cell in a table
     * @param mixed $content
     * @return \GIndie\ScriptGenerator\HTML5\Tables\Cell
     */
    public static function cellHeader($content)
    {
        return Tables\Cell::header($content);
    }

//<tr> 	Defines a row in a table
//<td> 	Defines a cell in a table
//<caption> 	Defines a table caption
//<colgroup> 	Specifies a group of one or more columns in a table for formatting
//<col> 	Specifies column properties for each column within a <colgroup> element
//<thead> 	Groups the header content in a table
//<tbody> 	Groups the body content in a table
//<tfoot> 	Groups the footer content in a table
}
