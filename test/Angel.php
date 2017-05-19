<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */


$tmpDir = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');

require_once $tmpDir . '/GIgenerator/DML/dist/DML.phar';
require_once $tmpDir . '/GIgenerator/HTML5/src/main.php';

//echo \GIndie\Generator\DML\HTML5\Category\Meta::Meta(["name" => "autor"]);

print("MetaTest:<br>");
\GIndie\Generator\DML\HTML5\Category\MetaTest::run();

print("LinksTest:<br>");
\GIndie\Generator\DML\HTML5\Category\LinksTest::run();

print("\nBasicTest<br>");
\GIndie\Generator\DML\HTML5\Category\BasicTest::run();

print("\nProgrammingTest<br>");
\GIndie\Generator\DML\HTML5\Category\ProgrammingTest::run();

print("\nStyleSemantics<br>");
\GIndie\Generator\DML\HTML5\Category\StylesSemanticsTest::run();