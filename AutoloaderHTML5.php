<?php

/**
 * DVLP-SG1-HTML5 - ProjectHandler
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5
 * @license file://LICENSE
 * 
 * @since 17-??-??
 *
 * @version 01.00
 * 
 * @edit 17-??-??
 * - Functional autoloader
 * @edit 18-02-27
 * - Created projectClasses()
 * - Updated filename
 * @edit 18-11-01
 * - Revised version
 */

namespace GIndie\ScriptGenerator\HTML5;

/**
 * Autoloader function
 */
\spl_autoload_register(function($className) {
    switch (\substr($className, 0, (\strlen(__NAMESPACE__) * 1)))
    {
        case __NAMESPACE__:
            $edited = \substr($className, \strlen(__NAMESPACE__) + \strrpos($className, __NAMESPACE__));
            $edited = \str_replace("\\", \DIRECTORY_SEPARATOR, __DIR__ . $edited) . ".php";
            if (\is_readable($edited)) {
                require_once($edited);
            }
    }
});
