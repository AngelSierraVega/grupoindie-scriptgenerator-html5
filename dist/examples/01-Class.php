<?php

/* 
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */


echo "------------ classHandler ------------ \n\n";
echo "--- Example 1: addClass. \n";//Should render: <p class='myClass myOtherClass'>This is a paragraph with class</p>
$ex1 = GIgenerator\DML\HTML5\Basic::Paragraph("This is a paragraph with class","myClass");
$ex1->addClass("myOtherClass");
echo $ex1;
echo "\n\n";

echo "--- Example 2: removeClass. \n";//Should render: <p class='myOtherClass'>This is a paragraph with class</p>
$ex1->removeClass("myClass");
echo $ex1;
echo "\n\n";

echo "--- Example 3: hasClass \n";//Should render: Class 'myClass' doesn't exists.
echo $ex1->hasClass("myClass") == true ? "Class 'myClass' exists." :  "Class 'myClass' doesn't exists.";
echo "\n\n";


echo "------------ scriptHandler ------------ \n\n";
echo "--- Example 5: addScript \n";//Should render: <node>content</node>
//echo GIgenerator\DML\Node::Simple("node",[],["content"]);
echo "\n\n";

echo "--- Example 6: hasScripts \n";//Should render: <node>content</node>
//echo GIgenerator\DML\Node::Simple("node",[],["content"]);
echo "\n\n";

echo "--- Example 7: clearScripts \n";//Should render: <parent><child></child></parent>
//echo GIgenerator\DML\Node::Simple("parent",[],[GIgenerator\DML\Node::Simple("child")]);
echo "\n\n";
echo "\n";
