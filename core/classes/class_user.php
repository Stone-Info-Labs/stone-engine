<?php
namespace Core
{
  class User
  {
    public $username;
    public $tokens;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $lab_id;
    public function __construct($info = array())
    {
      foreach($info as $k => $v)
      {
        switch($k)
        {
          case 'username':
            $this->username = $v;
            break;
          case 'tokens':
            foreach($v as $tk => $tv)
            {
              $this->tokens["$tk"] = $tv;
            }
            break;
          case 'first_name':
            $this->first_name = $v;
            break;
          case 'last_name':
            $this->last_name = $v;
            break;
          case 'email':
            $this->email = $v;
            break;
          case 'phone':
            $this->phone = $v;
            break;
          case 'lab_id':
            $this->lab_id = $v;
            break;
        }
      }
    }
    public function load($username , $password)
    {
      
    }
  }
}