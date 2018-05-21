<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ride extends Model
{
	use SoftDeletes;
    //
    /**
     * Ride belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	// belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
    	return $this->belongsTo(User::class,'user_id');
    }

    public function bookedRide(){
        return $this->hasMany(BookedRide::class,'ride_id');
    }
}
