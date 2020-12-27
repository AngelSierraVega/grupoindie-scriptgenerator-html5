<?php

/**
 * DVLP-SG1-HTML5 - Frames
 */

namespace GIndie\ScriptGenerator\HTML5\Category;

/**
 * Description of Frames
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Frames
 * @license file://LICENSE
 * 
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @since 18-02-04
 * @edit SG-HTML5.00.01
 * - Created iframe()
 */
class Frames
{

    /**
     * @since SG-HTML5.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\Frames\IFrame
     */
    public static function iframe()
    {
        return \GIndie\ScriptGenerator\HTML5\Category\Frames\IFrame::instance();
    }

}
