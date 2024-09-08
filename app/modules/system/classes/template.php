<?php
namespace App\Modules\System\Classes;

use App\Modules\System\Traits\Singleton;
use Develop\Classes\Database\Tables\RoutesTable;

class Template
{
    use Singleton;

    private string $template = 'default';
    public string $templatePath;

    public function load(string $template = 'default') : void
    {
        $this->template = $template;
        $this->templatePath = "/develop/templates/$this->template";
    }

    public function includeHeader() : void
    {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/$this->templatePath/header.php"))
        {
            include_once $_SERVER['DOCUMENT_ROOT'] . "/$this->templatePath/header.php";
        }
        else
        {
            echo "Header of template '$this->template' is not founded!";
        }
    }

    public function includeFooter() : void
    {
        $templatePath = $this->path;
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/$this->templatePath/footer.php"))
        {
            include_once $_SERVER['DOCUMENT_ROOT'] . "/$this->templatePath/footer.php";
        }
        else
        {
            echo "Footer of template '$this->template' is not founded!";
        }
    }
}