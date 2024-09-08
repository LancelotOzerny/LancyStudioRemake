<?php
namespace App\Modules\Database\Classes;

abstract class Table
{
    protected static string $tableName = '';
    public static function getTableName(): string
    {
        return static::$tableName;
    }

    public static function select(array $params = []) : array
    {
        $resultData = [];
        $bindParams = [];
        $selectParams = $params['select'] ?? [];
        $whereParams = $params['where'] ?? [];

        $select = empty($selectParams) ? 'select *' : 'select ' . join(', ', $selectParams);

        $wherePreparedParams = [];
        if (empty($whereParams) === false)
        {
            foreach ($whereParams as $key => $condition)
            {
                $isArray = is_array($condition);

                $operator = $isArray ? $condition[0] : '=';
                $value = $isArray ? $condition[1] : $condition;

                $bindParams[":$key"] = $value;
                $wherePreparedParams[] = "$key $operator :$key";
            }
        }
        $where = empty($wherePreparedParams) ? '' : 'WHERE ' . join(' AND ', $wherePreparedParams);

        $join = '';
        if (empty($params['join']) === false)
        {
            $tableName = $params['join']['table']::getTableName();
            foreach ($params['join']['on'] as $key => $value)
            {
                $isArray = is_array($value);
                $left = $key;
                $operand = $isArray ? $value[0] : '=';
                $right = $isArray ? $value[1] : $value;
                $join = ($params['join']['type'] ?? 'INNER') . " JOIN $tableName ON $left $operand $tableName.$right" ;
            }
        }

        $sql = "$select FROM " . static::$tableName . " $join $where";
        if ($params['order'])
        {
            $order = 'ORDER BY `' . $params['order']['by'] . '` ' . $params['order']['direction'] ?? 'ASC';
            $sql .= $order;
        }

        $prepare = DataBase::getConnection()->prepare($sql);
        if (empty($bindParams) === false)
        {
            foreach ($bindParams as $param => $value)
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