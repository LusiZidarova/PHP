<?php
namespace Database\ORM;

use Database\DatabaseInterface;
use Database\DatabaseStatement;
use Database\ResultSetInterface;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    /**
     * @var string
     */
    private $query;
    /**
     * @var DatabaseInterface
     */
    private $db;
    private $where;

    /**
     * MySQLQueryBuilder constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
        $this->query = '';
    }



    public function select(array $column = []): QueryBuilderInterface
    {
        $query = 'SELECT ';
        if(empty($columns)){
            $query.='* ';
        }else {
            $query .= implode(', ',$columns);
        }
        $this->query = $query;
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->query .= ' FROM '.$table;
        return $this;
    }

    public function where(array $criteria = []): QueryBuilderInterface
    {
        $this->query .= ' WHERE 1=1';
        foreach (array_keys($criteria) as $column){
            $this->query .=' AND '.$column . ' = ?';
        }
        $this->where = array_values($criteria);

        return $this;
    }

    public function orderBy(array $order):QueryBuilderInterface
    {
        $this->query .= ' ORDER BY ';
        foreach ($order as $column => $criterion){
            $this->query .=$column.' '.$criterion.', ';
        }
        $this->query = rtrim(', ',$this->query);
        return $this;
    }

    public function groupBy(array $columns)
    {
        $this->query .= ' CROUP BY '.implode(', ',$columns);
        return $this;
    }

    public function avg($value): string
    {
      return ' AVG(' .$value. ')';
    }

    public function sum($value): string
    {
        return ' SUM(' .$value. ')';
    }

    public function min($value): string
    {
        return ' MIN(' .$value. ')';
    }

    public function max($value): string
    {
        return ' MAX(' .$value. ')';
    }

    public function build(): ResultSetInterface
    {
        $this->db->query($this->query)->execute($this->where);
    }

}