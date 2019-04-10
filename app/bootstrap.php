<?php
  // Load Config files
  require_once 'config/config.php';

   // Autoload Core lib and controoler files
   spl_autoload_register(function ($className) {
    if (file_exists('../app/lib/' .$className. '.php')) {
        require_once 'lib/' . $className . '.php';
    } elseif (file_exists('../app/Controllers/' .$className. '.php')) {
        require_once 'Controllers/' . $className . '.php';
    }
   });
