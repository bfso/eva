<?php
function view($path)
{
      $path = str_replace('.','/',$path);
      ob_start();
      include 'resources/views/'.$path.'.blade.php';
      return  ob_get_clean();
}