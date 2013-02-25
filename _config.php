<?php

define("SYNTAX_DIR","syntaxhighlighter");

Object::add_extension("Page", "SyntaxHighlightedPage");

//LeftAndMain::require_javascript(SYNTAX_DIR."/thirdparty/syntaxhl/editor_plugin.js");
HtmlEditorConfig::get('cms')->enablePlugins(array('syntaxhl' => '../../../'.SYNTAX_DIR.'/thirdparty/syntaxhl/editor_plugin.js'));
HtmlEditorConfig::get('cms')->insertButtonsAfter('formatselect', 'syntaxhl');