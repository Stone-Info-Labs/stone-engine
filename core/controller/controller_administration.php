<?php
namespace Core
{
  class Administration
  {
    public function __construct()
    {
      
    }
    
    public function page_head()
    {
      $tmp = '<!DOCTYPE html>';
      $tmp .= '<head>';
      $tmp .= '<title>Administration</title>';
      $tmp .= $this->page_meta();
      $tmp .= $this->page_scripts();
      $tmp .= $this->pagestyles();
      $tmp .= '</head>';
      return $tmp;
    }
    private function page_meta()
    {
      $tmp = '<meta charset="UTF-8">';
      $tmp .= '<meta name="author" content="Snowycode11">';
      $tmp .= '<meta name="viewport" content="width=device-width,initial-scale=1.0>';
      return $tmp;
    }
    private function page_scripts()
    {
      $tmp = '<scripts>';
      
      $tmp .= '</scripts>';
      return $tmp;
    }
    private function page_styles()
    {
      $layout = load_layout('admin');
      $style = get_style($layout , 'admin');
      $tmp = '<link rel="stylesheet" type="text/css" href="'. $style . '">';
      return $tmp;
    }
    public function page_body()
    {
      $tmp = '<body>';
      
    }
    public function page_header()
    {
      
    }
  }
}