<?php
namespace App\Modules\Database\Classes;

abstract class Table
{
    protected static string $tableName = '';

    public static function select(array $params = []) : array
    {
        $resultData = [];

        $selectParams = $params['select'] ?? [];
        $whereParams = $params['where'] ?? [];

        $select = empty($selectParams) ? 'select *' : 'select ' . join(', ', $selectParams);

        $wherePrepared = [
            'params' => [],
            'sql' => '',
        ];
        if (empty($whereParams) === false)
        {
            foreach ($whereParams as $key => $condition)
            {
                $isArray = is_array($condition);

                $operator = $isArray ? $condition[0] : '=';
                $value = $isArray ? $condition[1] : $condition;

                $wherePrepared['params'][":$key"] = $value;
                $wherePrepared['sql'] .= "$key $operator :$key";
            }
        }
        $where = empty($whereParams) ? '' : 'WHERE ' . $wherePrepared['sql'];

        $sql = "$select FROM " . static::$tableName . " $where;";
        $prepare = DataBase::getConnection()->prepare($sql);

        echo '<pre>';
        print_r($sql);
        echo '</pre>';

        if (empty($where) === false)
        {
            foreach ($wherePrepared['params'] as $param => $value)
            {
                $prepare->bindParam($param, $value);
            }
        }

        if ($prepare->execute())
        {
            $resultData = $prepare->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $resultData;
    }
}