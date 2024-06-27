<?php 

class QueryBuilder{
    protected $query;

    public function select($field){
        $this->query = "SELECT $field";
        return $this;
    }

    public function from($table){
        $this->query .= " FROM $table";
        return $this;
    }

    public function where($condition){
        $this->query .= " WHERE $condition";
        return $this;
    }

    public function getQuery(){
        return $this->query;
    }
}


$query = (new QueryBuilder)->select('*')->from('users')->where('id=1')->getQuery();

echo $query;

?>