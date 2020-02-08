<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'user_id', 
        'category_id', 
        'title', 
        'phone', 
        'email', 
        'image', 
        'review', 
        'rate', 
        'location', 
        'description', 
        'address', 
        'active',
    ];

    public function user()
    {
        return $this -> belongsTo(User::class);
    }

    public function category()
    {
        return $this -> belongsTo(Category::class);
    }

    public function video()
    {
        return $this -> hasOne(Video::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'listing_feature');
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'listing_tag');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
