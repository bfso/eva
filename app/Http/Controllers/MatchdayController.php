<?php

namespace App\Http\Controllers;

use App\Matchday;

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
        $matchdays = (new Matchday())->get();
        $this->html = view('matchday.index', ['matchdays' => $matchdays]);
    }

    /**
     * @param int $matchdayId
     */
    public function show($matchdayId = 0)
    {
        $matchday = (new Matchday())->where('id', $matchdayId)->first();
        $this->html = view('matchday.show', ['matchday' => $matchday]);
    }
}