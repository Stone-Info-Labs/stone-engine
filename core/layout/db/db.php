<?php
return (object) array(
'users' => array(
    'username' => array(
      'type' => 'VARCHAR' ,
      'size' => 50 ,
      'unique' => true ,
      'index' => true ,
      'null' => false
    ) ,
    'password' => array(
      'type' => 'VARCHAR' ,
      'size' => 50 ,
      'null' => false
    ) ,
    'first_name' => array(
      'type' => 'VARCHAR' ,
      'size' => 30 ,
      'index' => true
    ) ,
    'last_name' => array(
      'type' => 'VARCHAR' ,
      'size' => 30 ,
      'index' => true
    ) ,
    'email' => array(
      'type' => 'VARCHAR' ,
      'size' => 70 ,
      'unique' => true
      'index' => true ,
      'null' => false
    ) ,
    'phone' => array(
      'type' => 'VARCHAR' ,
      'size' => 10 ,
      'unique' => true ,
      'index' => true
    ) ,
    'lab_id' => array(
      'type' => 'VARCHAR' ,
      'size' => 30 ,
      'unique' => true ,
      'index' => true ,
      'null' => false
    ) 
) ,
'admins' => array(
  'lab_id' => array(
    'type' => 'VARCHAR' ,
    'size' => 30 ,
    'unique' => true ,
    'index' => true ,
    'null' => false
  ) ,
  'token' => array(
    'type' => 'VARCHAR' ,
    'size' => 30 ,
    'null' => false
  )
) ,
'content' => array(
  'name' => array(
    'type' => 'VARCHAR' ,
    'size' => 25 ,
    'unique' => true ,
    'index' => true ,
    'null' => false
  ) ,
  'body' => array(
    'type' => 'VARCHAR' ,
    'size' => 3000 ,
    'null' => false
  ) ,
  'page' => array(
    'type' => 'VARCHAR' ,
    'size' => 25 ,
    'null' => false
  ) ,
  'weight' => array(
    'type' => 'INT' ,
    'size' => 9 ,
    'null' => false
  )
) ,
'visits' => array(
  'time' => array(
    'type' => 'TIMESTAMP'
  ) ,
  'page' => array(
    'type' => 'VARCHAR' ,
    'size' => 70 ,
    'null' => false
  ) ,
  'lab_id' => array(
    'type' => 'VARCHAR' , 
    'size' => 50 ,
    'null' => false
  )
) ,
'settings' => array(
  'name' => array(
    'type' => 'VARCHAR' ,
    'size' => 30 ,
    'unique' => true ,
    'index' => true ,
    'null' => false
  ) ,
  'value' => array(
    'type' => 'VARCHAR' ,
    'size' => 30 ,
    'null' => false
  )
) 
);