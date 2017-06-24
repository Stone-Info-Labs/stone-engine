<?php

namespace Core/Db
{
  class Db
  {
    private $dbp;
    private $dsn;
    private $lq;
    protected $dbu;
    protected $dbh;
    protected $opt;
    public $dbn;
    protected $conn;
    public $stmt;
    public $cs
    public function __construct($un = '' , $pw = '' , $db = '' , $sh = '' , $cs = 'utf8')
    {
      $this->dbp = $pw;
      $this->dbu = $un;
      $this->dbn = $db;
      $this->dbh = $sh;
      $this->cs = $cs;
      $this->opt = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ,
      PDO::ATTR_EMULATE_PREPARES => false
      ];
      $this->dsn = "mysql:host=$sh;dbname=$db;charset=$cs";
      try
      {
        $this->conn = new PDO($this->dsn , $un , $pw , $this->opt );
      }
      catch(PDOException $e)
      {
        throw new Exception($e->getMessage());
      }
    }
    public function __copy($db = '' , $un = '' , $pw = '')
    {
      $this->dbp = $pw;
      $this->dbu = $un;
      $this->dbn = $db;
      $cs = $this->cs;
      $this->dsn = "mysql:host=$sh;dbname=$db;charset=$cs";
      try
      {
        $this->conn = new PDO($this->dsn , $un , $pw , $this->opt);
      }
      catch(PDOException $e)
      {
        throw new Exception($e->getMessage());
      }
    }
    public function query($table , $crud = 'r' , $values = false)
    {
     try
     {
      $stmt = '';
      if(!$values)
      {
        return false;
      }
      switch($crud)
      {
        case 'c':
        $stmt = "INSERT INTO $table ( ";
        $cnt = count($values);
        foreach($values as $n => $v)
        {
          $stmt .= "$n ";
          $cnt = $cnt - 1;
          if($cnt > 0)
          {
            $stmt .= ', ';
          }
        }
        $stmt .= ") VALUES ( ";
        $cnt = count($values);
        foreach($values as $n => $v)
        {
          $stmt .= ':' . "$n ";
          $cnt = $cnt - 1;
          if($cnt > 0)
          {
            $stmt .= ', ';
          }
        }
        $stmt .= ')';
        $this->stmt = $stmt;
        $stmt = $this->conn->prepare($stmt);
        foreach($values as $n => $v)
        {
          $stmt->bindValue(":$n" , $v);
        }
        $stmt->execute();
        return $this->conn->lastInsertId();
        break;
        
        
        case 'r':
        if(!empty($values['where']))
        {
          $where = $values['where'];
        }
        else
        {
          $where = false;
        }
        if(!empty($values['select']))
        {
          $select = $values['select'];
        }
        else
        {
          $select = '*';
        }
        $stmt = "SELECT $select FROM $table ";
        if($where)
        {
          $cnt = count($where);
          foreach($where as $n => $v )
          {
            $stmt .= "$n" . '=' . ":$n ";
            $cnt--;
            if($cnt > 0)
            {
              $stmt .= "AND ";
            }
          }
        }
        $stmt = $this->conn->prepare($stmt);
       if($where)
       {
        foreach($where as $n => $v)
        {
          $stmt->bindValue(":$n" , $v);
        }
       }
        $stmt->execute();
        return $stmt->fetchAll();
        break;
        
        
        
        case 'u':
        if(empty($values['where']) || empty($values['set'])))
        {
          return false;
        }
        else
        {
          $where = $values['where'];
          $set = $values['set'];
        }
        $stmt = "UPDATE $table SET ";
        $cnt = count($set);
        foreach($set as $n => $v)
        {
          $stmt .= "$n" . ' = :' . "$n ";
          $cnt--;
          if($cnt > 0)
          {
            $stmt .= ', ';
          }
        }
        $stmt .= "WHERE ";
        $cnt = count($where);
        foreach($where as $n => $v)
        {
          $stmt .= "$n" . ' = :'. "W_$n ";
          $cnt--;
          if($cnt > 0)
          {
            $stmt .= "AND ";
          }
        }
        $stmt = $this->conn->prepare($stmt);
        foreach($set as $n => $v)
        {
          $stmt->bindValue(":$n" , "$v");
        }
        foreach($where as $n => $v)
        {
          $stmt->bindValue(":W_$n" , "$v");
        }
        $stmt->execute();
        return $stmt->rowCount();
        break;
        
        case 'd':
        $stmt = "DELETE FROM $table WHERE ";
        $cnt = count($values);
        foreach($values as $n => $v)
        {
          $stmt .= "$n" . ' = ' . ":$n ";
          $cnt--;
          if($cnt > 0)
          {
            $stmt .= "AND ";
          }
        }
        $stmt = $this->conn->prepare($stmt);
        foreach($value as $n => $v)
        {
          $stmt->bindValue(":$n" , "$v");
        }
        break;
        
        default:    
          return false;
        
      }
     }
     catch(PDOException $e)
     {
       throw new Exception($e->getMessage());
     }
    }
    public function exec($sql)
    {
     try
     {
      $this->conn->exec($sql);
      return true;
     }
     catch(PDOException $e)
     {
       throw new Exception($e->getMessage);
     }
    }
  }
}