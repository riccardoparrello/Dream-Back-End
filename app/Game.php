<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);   	
    }
    
    public function category()
	{
		return $this->belongsToMany(Category::class);
	}

	public function feedback()
	{
		return $this->hasMany(Feedback::class)->Latest();
	}
}
