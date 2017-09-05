<?php
class SyntaxHighlightedPage extends DataExtension
{
    
    public function contentcontrollerInit()
    {
        
        //Requirements::javascript($file);

        //TODO: these javascripts aren"t working:
        Requirements::javascript(SYNTAX_DIR."/thirdparty/syntaxhighlighter/scripts/shCore.js");
        Requirements::javascript(SYNTAX_DIR."/thirdparty/syntaxhighlighter/scripts/shAutoloader.js");
        
        Requirements::css(SYNTAX_DIR."/thirdparty/syntaxhighlighter/styles/shCore.css");
        Requirements::css(SYNTAX_DIR."/thirdparty/syntaxhighlighter/styles/shThemeDefault.css");
        
        $baseDir = SYNTAX_DIR;
        Requirements::customScript(<<<JS
SyntaxHighlighter.autoloader(
	'applescript			$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushAppleScript.js',
	'actionscript3 as3		$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushAS3.js',
	'bash shell				$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushBash.js',
	'coldfusion cf			$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushColdFusion.js',
	'cpp c					$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushCpp.js',
	'c# c-sharp csharp		$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushCSharp.js',
	'css					$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushCss.js',
	'delphi pascal			$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushDelphi.js',
	'diff patch pas			$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushDiff.js',
	'erl erlang				$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushErlang.js',
	'groovy					$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushGroovy.js',
	'haxe hx				$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushHaxe.js',
	'java					$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushJava.js',
	'jfx javafx				$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushJavaFX.js',
	'js jscript javascript	$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushJScript.js',
	'perl pl				$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushPerl.js',
	'php					$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushPhp.js',
	'text plain				$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushPlain.js',
	'py python				$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushPython.js',
	'ruby rails ror rb		$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushRuby.js',
	'scala					$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushScala.js',
	'sql					$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushSql.js',
	'vb vbnet				$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushVb.js',
	'xml xhtml xslt html	$baseDir/thirdparty/syntaxhighlighter/scripts/shBrushXml.js'
);
SyntaxHighlighter.defaults.toolbar = false;
SyntaxHighlighter.all();
JS
);
    }
}
