<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookedRide extends Model
{
    //
    use SoftDeletes;
    protected $table="bookedrides";
    /**
     * BookedRide belongs to Ride.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ride()
    {
    	// belongsTo(RelatedModel, foreignKey = ride_id, keyOnRelatedModel = id)
    	return $this->belongsTo("App\Ride",'ride_id');
    }

    /**
     * BookedRide belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	// belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
    	return $this->belongsTo(User::class,'traveller_id');
    }
}
