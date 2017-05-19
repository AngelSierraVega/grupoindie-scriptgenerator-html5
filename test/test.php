<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

$tmpDir = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
$tmpDir .= "/Dropbox/localdev";
require_once $tmpDir.'/GIgenerator/DML/dist/DML.phar';
require_once $tmpDir . '/GIgenerator/HTML5/src/main.php';

//echo \GIndie\Generator\DML\HTML5\Category\Meta::Meta(["author" => "dfkuro"]);

//echo \GIndie\Generator\DML\HTML5\Category\StylesSemantics::Style("h1 {color:red;}p {color:blue;}");

print("LinksTest:\n");
\GIndie\Generator\DML\HTML5\Category\LinksTest::run();

print("\nBasicTest\n");
\GIndie\Generator\DML\HTML5\Category\BasicTest::run();

print("\nProgrammingTest\n");
\GIndie\Generator\DML\HTML5\Category\ProgrammingTest::run();

print("\nStyleSemantics\n");
\GIndie\Generator\DML\HTML5\Category\StylesSemanticsTest::run();