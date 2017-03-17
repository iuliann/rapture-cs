<?php

class Rapture_Sniffs_ControlStructures_ControlSignatureSniff extends PHP_CodeSniffer_Standards_AbstractPatternSniff
{
    /**
     * Returns the patterns that this test wishes to verify.
     *
     * @return string[]
     */
    protected function getPatterns()
    {
        return array(
            'do {EOL...} while (...);EOL',
            'while (...) {EOL',
            'for (...) {EOL',
            'if (...) {EOL',
            'foreach (...) {EOL',
            '}EOL ... else if (...) {EOL',
            '}EOL ... elseif (...) {EOL',
            '}EOL ... else {EOL',
            'do {EOL',
        );

    }//end getPatterns()
}//end class
