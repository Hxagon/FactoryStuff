<?php
namespace FancyCMS;

/**
 * Class Page
 * @package FancyCMS
 */
class Page
{
    private $templateEngine;
    private $pageContent;

    /**
     * Page constructor.
     * @param TemplateEngine $templateEngine
     * @param PageContent $pageContent‚
     */
    public function __construct(TemplateEngine $templateEngine, PageContent $pageContent)
    {
        $this->templateEngine = $templateEngine;
        $this->pageContent = $pageContent;
    }

    /**
     * @return TemplateEngine
     */
    public function getTemplateEngine()
    {
        return $this->templateEngine;
    }

    /**
     * @return PageContent
     */
    public function getPageContent()
    {
        return $this->pageContent;
    }
}