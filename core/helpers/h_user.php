<?php
namespace Core/Model
{
  class User
  {
    public static function login($un , $pw , $dbh , $email_auth = false)
    {
      if($email_auth)
      {
        $values = array(
          'select' => 'lab_id' ,
          'where' => array(
            'email' => $un
          )
        );
        $dbh->query('users' , 'r' , $values);
      }
      else
      {
        $values = array(
          'select' => 'lab_id' ,
          'where' => array(
            'username' => $un
          )
        );
        $user = $dbh->query('users' , 'r' , $values);
        if($user['username'] == $un)
        {
          
        }
      }
    }
  }
}