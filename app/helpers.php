<?php
function view($path,$params = [])
{
      $path = str_replace('.','/',$path);
      foreach ($params as $key => $value){
            $$key = $value;
      }
      ob_start();
      include 'resources/views/'.$path.'.blade.php';
      return  ob_get_clean();
}