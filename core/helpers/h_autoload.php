<?php
  class Autoloader
  {
    static public function helper($class)
    {
      $filename = "core/helpers/h_" . $class . '.php';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function controller($class)
    {
      $filename = "core/controller/controller_" . $class . '.php';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function layout($class)
    {
      $filename = "core/layout/layout_" . $class . '.php';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function model($class)
    {
      $filename = "core/model/model_" . $class . '.php';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function view($class)
    {
      $filename = "core/view/view_" . $class . '.php';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function core($class)
    {
      $filename = "core/core_" . $class . '.php';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function library($class)
    {
      $filename = "core/library/library_" . $class . '.php';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function application($class)
    {
      $filename = "application/" . $class . "/" . $class . ".php";
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function css($class)
    {
      $filename = "public/css/" . $class . '.css';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function js($class)
    {
      $filename = "public/js/" . $class . '.js';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
    static public function template($class)
    {
      $filename = "public/templates/" . $class . '.tpl';
      if(file_exists($filename))
      {
        include($filename);
        if(class_exists($class))
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      else
      {
        return false;
      }
    }
  }
