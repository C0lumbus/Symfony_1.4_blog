<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2014/07/31 09:58:25

return array(
'propel' => new sfPropelDatabase(array (
  'classname' => 'DebugPDO',
  'dsn' => 'mysql:host=localhost;dbname=symfony14',
  'username' => 'root',
  'password' => NULL,
  'encoding' => 'utf8',
  'persistent' => true,
  'pooling' => true,
  'debug' => 
  array (
    'realmemoryusage' => true,
    'details' => 
    array (
      'time' => 
      array (
        'enabled' => true,
      ),
      'slow' => 
      array (
        'enabled' => true,
        'threshold' => 0.1,
      ),
      'mem' => 
      array (
        'enabled' => true,
      ),
      'mempeak' => 
      array (
        'enabled' => true,
      ),
      'memdelta' => 
      array (
        'enabled' => true,
      ),
    ),
  ),
  'name' => 'propel',
)),);
