1<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	//Setting the primary key to be named something other than id
    protected $primaryKey = 'gameId';

    public function stadium()
    {
    	return $this->belongsTo(Stadium::class);
    }

    public function teams()
    {
    	return $this->hasMany(Team::class);
    }
}