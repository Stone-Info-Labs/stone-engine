<?php
namespace Core
{
  class Auto
  {
    public static function load($class)
    {
      $heads = array(
      'h_' ,
      'layout_'  ,
      'view_' ,
      'model_' ,
      'controller_' ,
      'core_'
      );
      $file = "$class" . ".php";
      foreach(scandir("core/") as $d1)
      {
        if(is_dir("core/$d1"))
        {
          foreach(scandir("core/$d1") as $d2)
          {
            if(is_dir("core/$d1/$d2"))
            {
              foreach(scandir("core/$d1/$d2") as $d3)
              {
                foreach($heads as $h)
                {
                  $tfile = $h . $file;
                  if($tfile == $d3)
                  {
                    require_once("core/$d1/$d2/$tfile");
                    return true;
                  }
                }
              }
            }
            else
            {
              foreach($heads as $h)
                {
                  $tfile = $h . $file;
                  if($tfile == $d2)
                  {
                    require_once("core/$d1/$tfile");
                    return true;
                  }
                }
            }
          }
        }
        else
        {
          foreach($heads as $h)
            {
              $tfile = $h . $file;
              if($tfile == $d1)
              {
                require_once("core/$tfile");
                return true;
              }
            }
        }
      }
      return false;
    }
    
  }
}