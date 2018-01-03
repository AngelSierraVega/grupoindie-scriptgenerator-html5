<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5;

/**
 * Autoloader function
 */
\spl_autoload_register(function($className) {
    switch (\substr($className, 0, (\strlen(__NAMESPACE__) * 1)))
    {
        case __NAMESPACE__:
            $edited = \substr($className,
                              \strlen(__NAMESPACE__) + \strrpos($className,
                                                                __NAMESPACE__));
            $edited = \str_replace("\\", \DIRECTORY_SEPARATOR, __DIR__ . $edited) . ".php";
            if (\is_readable($edited)) {
                require_once($edited);
            }
    }
});

require_once __DIR__ . '/main/common.php';


//require_once __DIR__ . '/../../DML/dist/DML.phar';
//require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/GIgenerator/DML/dist/DML.phar';
//require_once __DIR__ . '/main/Handlers/Classes.php';
//require_once __DIR__ . '/main/Handlers/Scripts.php';
//require_once __DIR__ . '/main/Handlers/GlobalAttributes.php';
//require_once __DIR__ . '/main/Handlers/Hyperlink.php';
//
//require_once __DIR__ . '/main/Categories/Basic.php';
//require_once __DIR__ . '/main/Categories/StylesSemantics.php'; // Partial: Only <style> <div>  <span>
//require_once __DIR__ . '/main/Categories/Links.php';
//require_once __DIR__ . '/main/Categories/Lists.php'; // Partial: Not <menu> or <menuitem>
//require_once __DIR__ . '/main/Categories/Meta.php';
//require_once __DIR__ . '/main/Categories/Programming.php';

require_once __DIR__ . '/main/Document.php';

require_once __DIR__ . '/GIndie/ScriptGenerator/HTML5/Plugins/UnitTest/HandlerProject.php';

