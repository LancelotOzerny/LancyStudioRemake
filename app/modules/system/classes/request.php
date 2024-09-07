<?php
    namespace App\Modules\System\Classes;

    use App\Modules\System\Classes\Request_Element;

    class Request
    {
        public RequestElement $post;
        public RequestElement $get;

        public function __construct()
        {
            $this->post = new RequestElement($_POST);
            $this->get = new RequestElement($_GET);
        }
    }
?>