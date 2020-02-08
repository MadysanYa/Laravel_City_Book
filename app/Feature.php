<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function listings()
    {
        return $this->belongsToMany(Listing::class, 'listing_feature');
    }
}
