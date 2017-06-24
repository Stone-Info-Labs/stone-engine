<?php
namespace Core
{
  class Callback
  {
    protected $data;
    protected $isobject;
    public function __construct( $d , $o = true)
    {
      $this->data = $d;
      $this->isobject = $o;
    }
    public function callback($c , $m)
    {
      if($this->isobject)
      {
        return $c->$m($this->data);
      }
      else
      {
        return $c::$m($this->data);
      }
    }
  }
}