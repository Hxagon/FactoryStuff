<?php
namespace FancyCMS;

/**
 * Class TemplateEngine
 * @package FancyCMS
 */
class TemplateEngine
{
    private $pageName;

    /**
     * TemplateEngine constructor.
     * @param $pageName
     */
    public function __construct($pageName)
    {
        $this->pageName = $pageName;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        //Determine which template is set for this page
        $dummyTemplate = '<html><head><title>FancyCMS - '. $this->pageName . '</title></head><body>So fancy! {{PAGE_CONTENT}}</body>';
        return $dummyTemplate;
    }
}