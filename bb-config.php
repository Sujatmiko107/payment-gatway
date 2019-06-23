<?php 
return array (
  'debug' => false,
  'license' => 'PRO-wfe1RJ6aqG1wurwlocc9lwouNeTcUtklsp9ujy33clb8c57fdV',
  'salt' => '8434cda6352be121b5de9bbb3273061a',
  'url' => 'http://localhost:8888/BoxBilling/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/Applications/MAMP/htdocs/BoxBilling/bb-data',
  'path_logs' => '/Applications/MAMP/htdocs/BoxBilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'name' => 'test',
    'user' => 'root',
    'password' => 'root',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/Applications/MAMP/htdocs/BoxBilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);