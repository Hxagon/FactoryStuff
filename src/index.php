<?php
namespace FancyCMS;
require_once 'vendor/autoload.php';

$pageName = $_GET['page'];

$page = PageFactory::create($pageName);

ob_start();
echo $page->getTemplateEngine()->getTemplate();
echo $page->getPageContent()->getPage();
ob_end_clean();