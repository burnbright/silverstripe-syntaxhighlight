<?php
class SyntaxHighlightedPage extends DataExtension
{
    
    public function contentcontrollerInit()
    {
        
        //Requirements::javascript($file);

        //TODO: these javascripts aren"t working:
        Requirements::javascript(SYNTAX_DIR."/thirdparty/syntaxhighlighter/scripts/shCore.js");
        Requirements::javascript(SYNTAX_DIR."/thirdparty/syntaxhighlighter/scripts/shBrushPlain.js");
        Requirements::javascript(SYNTAX_DIR."/thirdparty/syntaxhighlighter/scripts/shBrushPhp.js");
        Requirements::javascript(SYNTAX_DIR."/thirdparty/syntaxhighlighter/scripts/shBrushJScript.js");
        Requirements::javascript(SYNTAX_DIR."/thirdparty/syntaxhighlighter/scripts/shBrushCss.js");
        
        Requirements::css(SYNTAX_DIR."/thirdparty/syntaxhighlighter/styles/shCore.css");
        Requirements::css(SYNTAX_DIR."/thirdparty/syntaxhighlighter/styles/shThemeDefault.css");
        Requirements::customScript("SyntaxHighlighter.all();");
    }
}
