<?php

class Rapture_Sniffs_Commenting_ClassCommentSniff extends PEAR_Sniffs_Commenting_ClassCommentSniff
{
    protected $tags = array(
        '@category'   => array(
            'required'       => false,
            'allow_multiple' => false,
        ),
        '@package'    => array(
            'required'       => true,
            'allow_multiple' => false,
        ),
        '@subpackage' => array(
            'required'       => false,
            'allow_multiple' => false,
        ),
        '@author'     => array(
            'required'       => true,
            'allow_multiple' => true,
        ),
        '@copyright'  => array(
            'required'       => false,
            'allow_multiple' => true,
        ),
        '@license'    => array(
            'required'       => true,
            'allow_multiple' => false,
        ),
        '@version'    => array(
            'required'       => false,
            'allow_multiple' => false,
        ),
        '@link'       => array(
            'required'       => false,
            'allow_multiple' => true,
        ),
        '@see'        => array(
            'required'       => false,
            'allow_multiple' => true,
        ),
        '@since'      => array(
            'required'       => false,
            'allow_multiple' => false,
        ),
        '@deprecated' => array(
            'required'       => false,
            'allow_multiple' => false,
        ),
    );

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_CLASS,
            T_INTERFACE,
            T_TRAIT
        );

    }//end register()
}//end class
