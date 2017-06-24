<?php
namespace Core
{
  class Session
  {
    protected $session;
    public function __construct()
    {
      session_start();
    }
    public function set($key , $value)
    {
      $_SESSION["$key"] = $value;
    }
    public function get($key)
    {
      return $_SESSION[$key];
    }
  }
}