<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Listing;
use Cohensive\Embed\Facades\Embed;

class AppController extends Controller
{

    public function listing(Request $request)
    {
        
        $id         = $request -> id;
        $listing    = Listing::findOrFail($id);
        $video_url  = $listing -> video ? $listing -> video -> url : null;
        $video      = Embed::make($video_url)->parseUrl(); // Fackage For Embed Youtube Video Into Website 

        if ($video) {
            $video -> setAttribute(['width' => 640]);
            $video  = $video -> getHtml();
        }
        else {
            $video  = null;
        }

        return view('frontend.listing',['listing' => $listing, 'video' => $video]);
    }
    
    public function listings(Request $request)
    {

        $search   = $request -> input('search');
        $listings = Listing::select('id','title','review','image','rate','description','address')
        
        ->when($search, function($query, $search){
            return $query -> where('title', 'LIKE', "%$search");
        }) 
        ->paginate(9);
            return view('frontend.listings',['listings' => $listings]);
    }   

}
