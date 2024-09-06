<?php
namespace App\Modules\System\Classes;

use App\Modules\System\Traits\Singleton;

class Template
{
    use Singleton;

    private string $template = 'default';

    public function load(string $uri) : void
    {

    }

    public function includeHeader() : void
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/develop/templates/$this->template/header.php";
        if (file_exists($path))
        {
            include_once $path;
        }
        else
        {
            echo "Header of template '$this->template' is not founded!";
        }
    }

    public function includeFooter() : void
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/develop/templates/$this->template/footer.php";
        if (file_exists($path))
        {
            include_once $path;
        }
        else
        {
            echo "Footer of template '$this->template' is not founded!";
        }
    }
}