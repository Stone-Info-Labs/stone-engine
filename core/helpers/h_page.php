<?php
namespace Core
{
  class Page
  {
    public $doctype;
    public $head;
    public $body;
    public $complete;
    public function __construct($doctype = "html")
    {
      $this->doctype = $doctype;
      $this->complete = false;
      $this->head = array();
      $this->body = array();
      array_unshift($this->head , false);
      array_unshift($this->body , false);
    }
    public function add_to_head(Element $el)
    {
      array_unshift($this->head , $el);
      return $this;
    }
    public function add_to_body(Element $el)
    {
      array_unshift($this->body , $el);
      return $this;
    }
    public function render()
    {
      if(!$this->complete)
      {
        return false;
      }
      
    }
    public function done()
    {
      $this->complete = true;
      return $this;
    }
  }
}