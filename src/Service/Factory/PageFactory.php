<?php
namespace FancyCMS;

/**
 * Class PageFactory
 * @package FancyCMS
 */
class PageFactory
{
    /**
     * @param $pageName
     * @return Page
     */
    public static function create($pageName)
    {
        $templateEngine = self::getTemplateEngineInstance($pageName);
        $pageContent = self::getPageContentInstance($pageName);

        return new Page($templateEngine, $pageContent);
    }

    /**
     * @param $pageName
     * @return TemplateEngine
     */
    private static function getTemplateEngineInstance($pageName)
    {
        return new TemplateEngine($pageName);
    }

    /**
     * @param $pageName
     * @return PageContent
     */
    private static function getPageContentInstance($pageName)
    {
        return new PageContent($pageName);
    }
}