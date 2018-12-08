<?php

namespace App\Http\Controllers;

class MatchdayController
{
      protected $html;

      public function html()
      {
            return $this->html;
      }

      public function index()
      {
            $this->html = "Liste mit Matchdays";
      }
}