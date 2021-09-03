<?php
$settings['hash_salt'] =  '123456567890';
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'drupal',
  'host' => 'mariadb',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
);
$settings['config_sync_directory'] = '../config/sync';
$settings['trusted_host_patterns'] = [
  $_SERVER['PROJECT_BASE'].'$',
];
