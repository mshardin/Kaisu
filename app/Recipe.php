<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
    	'user_id',
	    'title', 
	    'image', 
	    'summary', 
	    'quantity', 
	    'ingredients', 
	    'directions', 
	    'course', 
	    'type'
    ];

    /**
     * A Recipe is owned by an author
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
    	return $this->belongsTo('App\User');
    }
}
