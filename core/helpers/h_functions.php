<?php

  function toAscii($str , $del = '-')
  {
    $clean = iconv('UTF-8' , 'ASCII//TRANSLIT' , $str);
    $clean = preg_replace("/[^a-zA-Z0-9/_|+-]/" , '' , $clean);
    $clean = strtolower(trim($clean , '-'));
    $clean = preg_replace("/[/_|+ -]+/" , $del , $clean);
    
    return $clean;
  }
  function getRequest($arr = true)
  {
    $request = $_SERVER['REQUEST_URI'];
    $request = explode( "/" , $request);
    if($arr)
    {
      return $request;
    }
    else
    {
      return end($request);
    }
  }
  function scanDir($dir)
  {
    if(is_dir($dir))
    {
      return scandir($dir);
    }
    else
    {
      return false;
    }
  }
  function sort($data , $order = 'asc' , $assoc = false)
  {
    if($assoc)
    {
      if($order == 'asc')
      {
        return asort($data);
      }
      if($order == 'desc')
      {
        return arsort($data);
      }
      if($order == 'kasc')
      {
        return ksort($data);
      }
      if($order == 'kdesc')
      {
        return krsort($data);
      }
    }
    else
    {
      if($order == 'asc')
      {
        return sort($data);
      }
      if($order == 'desc')
      {
        return rsort($data);
      }
    }
    return false;
  }
  function get_style($layout , $style = false)
  {
      if(isset($layout->$style) && !empty($layout->$style))
      {
        if($layout->$style == 'defaults')
        {
          return $layout->$style;
        }
        $tmp = $layout->$style;
        return "public/css/$tmp";
      }
      else
      {
        return false;
      }
  }
  function load_layout($layout)
  {
    return include("core/layout/layout_$layout.php");
  }
