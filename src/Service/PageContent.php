<?php
namespace FancyCMS;

/**
 * Class PageContent
 * @package FancyCMS
 */
class PageContent
{
    private $page;

    /**
     * PageContent constructor.
     * @param $page
     */
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        //Get page content out of the database
        return $this->page;
    }
}