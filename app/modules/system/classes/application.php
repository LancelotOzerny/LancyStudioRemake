<?php
namespace App\Modules\System\Classes;

use App\Modules\System\Traits\Singleton;
use App\Modules\System\Classes\Request;

class Application
{
    use Singleton;

    public bool $isLogMode = false;

    private string $current_uri = '';
    private array $params = [];
    public Request | null $request = null;

    public User | null $currentUser = null;

    public function init() : void
    {
        $arr = explode('?', $_SERVER['REQUEST_URI']);
        $this->current_uri = $arr[0];

        if (isset($arr[1]))
        {
            $this->setParams($arr[1]);
        }

        $this->request = new Request();

        $this->currentUser = new \App\Modules\System\Classes\User();
        if ($this->request->session->has('login-user'))
        {
            $this->currentUser->loadByLogin($this->request->session->get('login-user'));
        }
    }

    private function setParams(string $params) : void
    {
        $this->params = [];
        $paramsList = explode('&', $params);

        foreach ($paramsList as $param)
        {
            $arr = explode('=', $param);
            $this->params[$arr[0]] = $arr[1] ?? null;
        }
    }

    public function getUri() : string
    {
        return $this->current_uri;
    }

    public function getParams() : array
    {
        return $this->params;
    }
}