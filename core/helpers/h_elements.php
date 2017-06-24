<?php
namespace Core
{
  class Element
  {
    public $data;
    public $metadata;
    public function __construct($data , $meta = null)
    {
      $this->data = $data;
      $this->metadata = $meta;
    }
    public function set_meta($name , $value)
    {
      $this->metadata["$name"] = $value;
    }
    public function meta()
    {
      return $this->metadata;
    }
  }
}