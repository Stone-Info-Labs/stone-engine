<?php
namespace Core/Db
{
  class Db_maker
  {
    protected $sql;
    public function __construct($table , $signature = false)
    {
      $this->table = $table;
      $this->sql = "CREATE TABLE $table ( ";
      $this->sql .= "id INT(15) AUTO_INCREMENT PRIMARY KEY ,";
      if($signature)
      {
        $cnt = count($signature);
        foreach($signature as $field)
        {
          $cnt--;
          if(empty($field['name']) || empty($field['type']) || empty($field['size']))
          {
            if(!$field['type'] != 'timestamp')
            {
              throw new Exception("invalid signature");
            }
          }
          $this->sql .= $field['name'] . ' ';
          if($field['type'] == 'timestamp')
          {
            $this->sql .= 'TIMESTAMP ';
          }
          else
          {
            $this->sql .= $field['type'];
            $this->sql .= $field['type'] . '(';
            $this->sql .= $field['size'] . ') ';
          }
          if($field['unique'] === true)
          {
            $this->sql .= 'UNIQUE ';
          }
          if($field['index'] === true)
          {
            $this->sql .= 'INDEX ';
          }
          if($field['null'] === false)
          {
            $this->sql .= 'NOT NULL ';
          }
          if($cnt > 0)
          {
            $this->sql .= ', ';
          }
        }
      }
    }
    
    public function add_one($sig = array())
    {
      if(empty($field['name']) || empty($field['type']) || empty($field['size']))
      {
        if(!$field['type'] != 'timestamp')
        {
          throw new Exception("invalid signature");
        }
      }
      $this->sql .= ' , ';
      $this->sql .= $field['name'] . ' ';
      if($field['type'] == 'timestamp')
      {
        $this->sql .= 'TIMESTAMP ';
      }
      else
      {
        $this->sql .= $field['type'];
        $this->sql .= $field['type'] . '(';
        $this->sql .= $field['size'] . ') ';
      }
      if($field['null'] === false)
      {
        $this->sql .= 'NOT NULL ';
      }
      if($field['unique'] === true)
      {
        $this->sql .= 'UNIQUE ';
      }
      if($field['index'] === true)
      {
        $this->sql .= 'INDEX';
      }
      return $this;
    }
    
    public function add_many()
    {
      $cnt = count($signature);
        foreach($signature as $field)
        {
          $cnt--;
          if(empty($field['name']) || empty($field['type']) || empty($field['size']))
          {
            if(!$field['type'] != 'timestamp')
            {
              throw new Exception("invalid signature");
            }
          }
          $this->sql .= $field['name'] . ' ';
          if($field['type'] == 'timestamp')
          {
            $this->sql .= 'TIMESTAMP ';
          }
          else
          {
            $this->sql .= $field['type'];
            $this->sql .= $field['type'] . '(';
            $this->sql .= $field['size'] . ') ';
          }
          if($field['null'] === false)
          {
            $this->sql .= 'NOT NULL ';
          }
          if($field['unique'] === true)
          {
            $this->sql .= 'UNIQUE ';
          }
          if($field['index'] === true)
          {
            $this->sql .= 'INDEX ';
          }
          if($cnt > 0)
          {
            $this->sql .= ', ';
          }
        }
      return $this;
    }
    public function exec(Db $dbh)
    {
      $this->sql .= ')';
     try
     {
      $dbh->exec($this->sql);
      return true;
     }
     catch(Exception $e)
     {
       throw new Exception($e->getMessage());
     }
    }
  }
}