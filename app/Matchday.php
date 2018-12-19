<?php

namespace App;

class Matchday extends Model
{
    protected $table = 'matchday';
    protected $where = null;
    protected $rows = ['MD1', 'MD2'];

    public function first(){
        $matchdays = $this->get();
        foreach ($matchdays as $matchday){
            return $matchday;
        }
    }
}