<?php
namespace App\Modules\System\Classes;

class RequestElement
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function has(string $key) : bool
    {
        if (array_key_exists($key, $this->data))
        {
            return true;
        }
        return false;
    }

    public function get(string $key) : mixed
    {
        return $this->data[$key];
    }
}