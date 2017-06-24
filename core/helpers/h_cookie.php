<?php
namespace Core
{
  class Cookies 
  {
    public function set($name , $value = true , $expire = 30)
    {
      setcookie($name , $value , time() + (86400 * $expire) , "/lab/" );
    } 
    public function get($name)
    {
      if(!isset($_COOKIE["$name"]))
      {
        return false;
      }
      else
      {
        return $_COOKIE["$name"];
      }
    }
  }
}