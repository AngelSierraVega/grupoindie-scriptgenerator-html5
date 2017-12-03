<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

/**
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2017-05-18
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */

$tmpDir = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
require_once $tmpDir.'/GIgenerator/DML/dist/DML.phar';
require_once $tmpDir . '/GIgenerator/HTML5/src/main.php';

//echo \GIndie\Generator\DML\HTML5\Category\Meta::Meta([]);

print("MetaTest:<br>");
\GIndie\Generator\DML\HTML5\Category\MetaTest::run();
print("\n");

print("ListsTest:<br>");
\GIndie\Generator\DML\HTML5\Category\ListsTest::run();
print("\n");