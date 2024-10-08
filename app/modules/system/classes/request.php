<?php
    namespace App\Modules\System\Classes;

    use App\Modules\System\Classes\Request_Element;

    class Request
    {
        public RequestElement $post;
        public RequestElement $get;
        public RequestElement $session;

        public function __construct()
        {
            $this->post = new RequestElement($_POST);
            $this->get = new RequestElement($_GET);
            $this->session = new RequestElement($_SESSION);
        }
    }
?>