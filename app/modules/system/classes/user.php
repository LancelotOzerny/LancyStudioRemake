<?php
namespace App\Modules\System\Classes;

use Develop\Classes\Database\Tables\UsersTable;

class User
{
    private string $login = '';
    private string $rightsLevel = '';

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getRightsLevel(): string
    {
        return $this->rightsLevel;
    }

    public function loadByLogin(string $login) : void
    {
        $userList = UsersTable::select([
            'select' => ['login', 'level as rights_level'],
            'join' => [
                'type' => 'INNER',
                'table' => 'Develop\Classes\Database\Tables\RightsTable',
                'on' => [
                    'rights_id' => 'id'
                ]
            ],
            'WHERE' => [
                'login' => $login,
            ]
        ]);

        if (empty($userList) === false)
        {
            $this->login = $userList[0]['login'];
            $this->rightsLevel = $userList[0]['rights_level'];
        }
    }
}