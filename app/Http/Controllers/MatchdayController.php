<?php

namespace App\Http\Controllers;

class MatchdayController
{
      protected $html;

      public function html()
      {
            return $this->html;
      }

      /**
       * Show a list with all resources
       */
      public function index()
      {
            $matchdays = ['MD1','MD2'];
            $this->html = view('matchday.index',['matchdays'=>$matchdays]);
      }
}