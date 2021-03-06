<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Injury extends Model
{
    //Setting the primary key to be named something other than id
    //injury_logs
    protected $table = 'injuries';
    protected $primaryKey = 'injuryId';

    public function player()
    {
    	return $this->belongsTo(Player::class);
    }
}